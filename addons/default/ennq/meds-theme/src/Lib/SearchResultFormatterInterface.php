<?php

namespace Ennq\MedsTheme\Lib;

interface SearchResultFormatterInterface
{
    /**
     * Formats SearchEntry::getContent() by deleting all html tags and specific symbols, adds bold style for
     * search needle
     *
     * @param array<SearchEntry> $data
     * @param string $needle
     * @param int $num
     * @return array<SearchEntry>
     */
    public function get(array $data, string $needle, int $num = 20): array;
}
