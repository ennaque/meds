<?php

return [
    'mode'          => [
        'label'        => 'Внешний вид',//'Mode',
        'instructions' => 'Внешний вид поля выбора.',//'What kind of input would you like to display?',
        'option'       => [
            'search'   => 'Поисковая строка',//'Search',
            'buttons'  => 'Кнопки',//'Buttons',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
            'radio'    => 'Радио-кнопки',//'Radio Buttons',
        ],
    ],
    'options'       => [
        'label'        => 'Опции',//'Options',
        'instructions' => 'Ниже задаются параметры в формате <strong>key: Value</strong> или <strong>Value</strong>. Каждый следующий параметр указывается в новой строке.',//'Enter options below in a <strong>key: Value</strong> or <strong>Value</strong> only format. Enter each option on a new line.',
        'placeholder'  => 'key: Value',//'key: Value',
    ],
    'default_value' => [
        'label'        => 'Значение по умолчанию',//'Default Value',
        'instructions' => '',//'Enter the default value if any.',
    ],
    'separator'     => [
        'label'        => 'Разделитель',//'Separator',
        'instructions' => 'Можно задать нестандартный разделитель пары <strong>key: Value</strong>.',//'Specify a custom <strong>key:value</strong> separator if needed.',
        'placeholder'  => ':',//':',
    ],
];
