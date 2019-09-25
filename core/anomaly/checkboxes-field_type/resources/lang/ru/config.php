<?php

return [
    'mode'          => [
        'label'  => 'Тип ввода',//'Input Mode',
        'option' => [
            'checkboxes' => 'Чекбоксы',//'Checkboxes',
            'tags'       => 'Теги',//'Tags',
        ],
    ],
    'options'       => [
        'label'        => 'Опции',//'Options',
        'instructions' => 'Ниже задаются параметры в формате <strong>key: Value</strong> или <strong>Value</strong>. Каждый параметр должен быть указан в отдельной строке.',//'Enter options below in a <strong>key: Value</strong> or <strong>Value</strong> only format. Enter each option on a new line.',
        'placeholder'  => 'key: Value',//'key: Value',
    ],
    'min'           => [
        'label'        => 'Минимум',//'Minimum Selections',
        'instructions' => 'Минимальное количество вариантов выбора.',//'Enter the minimum number of allowed selections.',
    ],
    'max'           => [
        'label'        => 'Максимум',//'Maximum Selections',
        'instructions' => 'Максимольное количество вариантов выбора.',//'Enter the maximum number of allowed selections.',
    ],
    'default_value' => [
        'label'        => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Значения выбора по умолчанию.',//'Enter the default selections.',
    ],
    'separator'     => [
        'label'        => 'Разделитель',//'Separator',
        'instructions' => 'Можно задать нестандартный разделитель пары <strong>key: Value</strong>.',//'Specify a custom <strong>key:value</strong> separator if needed.',
        'placeholder'  => ':',//':',
    ],
];
