<?php

namespace Ennq\MedsTheme\Service;

use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;
use Ennq\MedsTheme\Lib\SearchEntry;

class SearchResultCombiner implements SearchResultCombinerInterface
{
    /**
     * @param array<SearchEntry> $data
     * @param string $needle
     * @param int $num
     * @return array<SearchEntry>
     */
    public function get(array $data, string $needle, int $num = 1): array
    {
        return $data;
    }
}
