<?php

return [
    'mode'          => [
        'label'        => 'Внешний вид',//'Mode',
        'instructions' => 'Стиль отображения поля выбора языка.',//'What kind of input would you like to display?',
        'option'       => [
            'search'   => 'Посковая строка',//'Search',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
        ],
    ],
    'top_options'   => [
        'name'         => 'Приоритетные языки',//'Top Options',
        'instructions' => 'Перечень ISO кодов языков, которые будут отображаться в самом верху выпадающего списка или поисковой выдачи. Каждый код должен быть указан в отдельной строке.',//'Enter the ISO codes for languages that should be moved to the top. Enter each code on a new line.',
        'placeholder'  => "RU\nBY\nUA\nKZ",//"en\nes\nfr",
    ],
    'default_value' => [
        'name'         => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Язык, который по умолчанию будет указан в поле.',//'Select a default language if any.',
    ],
];
