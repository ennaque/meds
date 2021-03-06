<?php

return [
    'mode'          => [
        'label'        => 'Внешний вид',//'Mode',
        'instructions' => 'Стиль отображения поля выбора страны.',//'What kind of input would you like to display?',
        'option'       => [
            'input'    => 'Простой текстовый ввод',//'Text Input',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
            'search'   => 'Поисковая строка',//'Search',
        ],
    ],
    'top_options'   => [
        'name'         => 'Приоритетные страны',//'Top Options',
        'instructions' => 'Перечень ISO Alpha-2 кодов стран, которые будут отображаться в самом верху выпадающего списка или поисковой выдачи. Каждый код должен быть указан в отдельной строке.',//'Enter the ISO Alpha-2 codes for countries that should be moved to the top. Enter each code on a new line.',
        'placeholder'  => "RU\nBY\nUA\nKZ",//"US\nCA\nMX",
    ],
    'default_value' => [
        'name'         => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Страна по умолчанию, которая будет указана в поле выбора.',//'Select a default country if any.',
    ],
];
