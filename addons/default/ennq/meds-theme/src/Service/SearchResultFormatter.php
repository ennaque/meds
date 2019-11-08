<?php

namespace Ennq\MedsTheme\Service;

use Ennq\MedsTheme\Lib\SearchResultFormatterInterface;
use Ennq\MedsTheme\Lib\SearchEntry;


class SearchResultFormatter implements SearchResultFormatterInterface
{
    /**
     * @param array<SearchEntry> $data
     * @param string $needle
     * @param int $num
     * @return array<string>
     */
    public function get(array $data, string $needle, int $num = 20): array
    {
        $result = [];
        foreach ($data as $iValue) {
            $content = $this->extractContent($iValue);
            $entriesPositions = $this->findNeedleEntries($content, $needle, $num);
            if (count($entriesPositions) > 0) {
                $needleEntries = $this->extractNeedleEntries($content, $needle, $entriesPositions);
                $iValue->setContent($needleEntries[0]);
                for ($j = 1, $jMax = count($needleEntries); $j < $jMax; ++$j) {
                    $iValue->pushAdditionalFormattedContent($needleEntries[$j]);
                }
                $result[] = $iValue;
            } else {
                $iValue->setContent('');
            }
        }

        return $result;
    }

    /**
     * @param SearchEntry $entry
     * @return string
     */
    private function extractContent(SearchEntry $entry): string
    {
        return $this->cleanUp($entry->getContent());
    }

    /**
     * @param string $content
     * @return string
     */
    private function cleanUp(string $content): string
    {
        $result = strip_tags($content);
        $result = str_replace(array('\r\n', '\r', '\n', '/&#?[a-z0-9]+;/i'), '', $result);
        $result = preg_replace('/\t|[\s]{2,}/', ' ', $result);

        return $result;
        //return preg_replace("/&#?[a-z0-9]+;/i", "", strip_tags(htmlentities($content)));
    }

    /**
     * @param string $content
     * @param string $needle
     * @param int $count
     * @return array<int>
     */
    private function findNeedleEntries(string $content, string $needle, int $count): array
    {
        $result = [];
        $offset = 0;
        $position = strpos($content, $needle, $offset);
        while ($position !== FALSE && count($result) < $count) {
            $result[] = $position;
            $offset = $position + strlen($needle);
            $position = strpos($content, $needle, $offset);
        }

        return $result;
    }

    /**
     * @param string $content
     * @param string $needle
     * @param array $entriesPositions
     * @return array<string>
     */
    private function extractNeedleEntries(string $content, string $needle, array $entriesPositions): array
    {
        if (count($entriesPositions) === 0) {
            return [];
        }
        $result = [];
        $result[0] = '';
        $ri = 0;
        $cutLength = 60;

        foreach ($entriesPositions as $i => $iValue) {
            /* PROCESSING THE SUBSTRING BEFORE THE NEEDLE ENTRY INCLUDING NEEDLE */
            if ($i === 0) {
                if ($iValue >= $cutLength) {
                    $from = $iValue - $cutLength;
                    $length = $cutLength;
                } else {
                    $from = 0;
                    $length = $iValue;
                }
            } else {
                $previousPosition = $entriesPositions[$i - 1] + strlen($needle);
                $distance = $iValue - $previousPosition;
                if ($distance >= $cutLength * 2) {
                    $from = $iValue - $cutLength;
                    $length = $cutLength;
                } else {
                    $from = $iValue - $distance;
                    $length = $distance;
                }
            }
            $result[$ri] .= substr($content, $from, $length);
            $result[$ri] .= '<b>' . $needle . '</b>';
            /* PROCESSING THE SUBSTING PLACED AFTER THE NEEDLE ENTRY */
            if ($i < (count($entriesPositions) - 1)) {
                if (($entriesPositions[$i + 1] - $iValue + strlen($needle)) >= ($cutLength * 2)) {// if the next entry is far enough (double distance from current one), ...
                    // ...then copy $cutLength symbols after the needle to the result ...
                    $result[$ri] .= substr($content, $iValue + strlen($needle), $cutLength);
                    ++$ri; // ...and go over towards the next result string
                    $result[$ri] = '';
                }
                // otherwise -- do nothing: the next needle entry will be added to the current result string in the next loop iteration
            } else { // the last needle entry
                if ((strlen($content) - $iValue + strlen($needle)) >= $cutLength) {
                    $length = $cutLength;
                } else {
                    $length = strlen($content) - $iValue + strlen($needle);
                }
                $result[$ri] .= substr($content, $iValue + strlen($needle), $length);
            }
        }
        foreach ($result as $i => $iValue) {
            $firstChar = $result[$i][0];
            $lastChar = $result[$i][strlen($iValue) - 1];
            if ($firstChar !== ' ') {
                $from = strpos($iValue, ' ', 1) + 1;
            } else {
                $from = 1;
            }
            if ($lastChar !== ' ' && $lastChar !== '.' && $lastChar !== ',' && $lastChar !== ';' && $lastChar !== ':') {
                $to = strrpos($iValue, ' ', -1);
            } else {
                $to = strlen($iValue) - 1;
            }
            $result[$i] = '...' . substr($iValue, $from, $to - $from) . '...';
        }

        return $result;
    }
}
