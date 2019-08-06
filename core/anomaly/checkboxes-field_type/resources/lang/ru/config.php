<?php

return [
    'mode'          => [
        'label'  => 'Режим ввода',//'Input Mode',
        'option' => [
            'checkboxes' => 'Чекбоксы',//'Checkboxes',
            'tags'       => 'Тэги',//'Tags',
        ],
    ],
    'options'       => [
        'label'        => 'Опции',//'Options',
        'instructions' => 'Ниже задаются параметры в формате <strong>key: Value</strong> или <strong>Value</strong>. Каждый следующий параметр указывается в новой строке.',//'Enter options below in a <strong>key: Value</strong> or <strong>Value</strong> only format. Enter each option on a new line.',
        'placeholder'  => 'key: Value',//'key: Value',
    ],
    'min'           => [
        'label'        => 'Минимальный выбор',//'Minimum Selections',
        'instructions' => 'Минимальное количество разрешенных вариантов выбора',//'Enter the minimum number of allowed selections.',
    ],
    'max'           => [
        'label'        => 'Максимальный выбор',//'Maximum Selections',
        'instructions' => 'Максимольное количество разрешенных вариантов выбора',//'Enter the maximum number of allowed selections.',
    ],
    'default_value' => [
        'label'        => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Значения выбора по умолчанию',//'Enter the default selections.',
    ],
    'separator'     => [
        'label'        => 'Разделитель',//'Separator',
        'instructions' => 'Можно задать нестандартный разделитель пары <strong>key: Value</strong>.',//'Specify a custom <strong>key:value</strong> separator if needed.',
        'placeholder'  => ':',//':',
    ],
];
