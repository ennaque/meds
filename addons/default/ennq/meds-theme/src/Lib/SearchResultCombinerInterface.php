<?php

namespace Ennq\MedsTheme\Lib;

interface SearchResultCombinerInterface
{
    /**
     * @param array<SearchEntry> $data
     * @param string $needle
     * @param int $num
     * @return array<string>
     */
    public function get(array $data, string $needle, int $num = 1): array;
}
