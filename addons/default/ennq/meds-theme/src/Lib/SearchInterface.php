<?php


namespace Ennq\MedsTheme\Lib;


use Symfony\Component\HttpFoundation\Request;

interface SearchInterface
{
    public function search(Request $request);
}
