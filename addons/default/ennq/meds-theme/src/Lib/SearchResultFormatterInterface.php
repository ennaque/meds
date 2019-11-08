<?php

namespace Ennq\MedsTheme\Lib;

interface SearchResultFormatterInterface
{
    /**
     * @param array<SearchEntry> $data
     * @param string $needle
     * @param int $num
     * @return array<SearchEntry>
     */
    public function get(array $data, string $needle, int $num = 20): array;
}
