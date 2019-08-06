<?php

return [
    'mode'          => [
        'label'        => 'Режим',//'Mode',
        'instructions' => 'Режим отображения поля выбора языка.',//'What kind of input would you like to display?',
        'option'       => [
            'search'   => 'Посковая строка',//'Search',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
        ],
    ],
    'top_options'   => [
        'name'         => 'Настройка языков, отображаемых вверху',//'Top Options',
        'instructions' => 'Перечень ISO кодов языков, которые будут отображены в самом верху. Каждый код должен быть указан в отдельной строке.',//'Enter the ISO codes for languages that should be moved to the top. Enter each code on a new line.',
        'placeholder'  => "RU\nBY\nUA\nKZ",//"en\nes\nfr",
    ],
    'default_value' => [
        'name'         => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Язык, который по умолчанию будет указан в поле.',//'Select a default language if any.',
    ],
];
