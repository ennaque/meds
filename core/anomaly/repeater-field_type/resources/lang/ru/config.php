<?php

return [
    'related' => [
        'label'        => 'Повторяющиеся данные',//'Repeater',
        'instructions' => 'Specify the related <a href="' . url(
                'admin/repeaters'
            ) . '" target="_blank">repeater</a>.',
    ],
    'add_row' => [
        'label'        => 'Добавить строку',//'Add Row',
        'instructions' => 'Пользовательский текст для кнопки "Добавить строку".',//'Specify custom text for the "Add Row" button.',
        'placeholder'  => 'Добавить строку',//'Add Row',
    ],
    'min'     => [
        'label'        => 'Минимальное количество элементов',//'Minimum Items',
        'instructions' => 'Минимально разрешённое количество элементов.',//'Specify the minimum number of allowed items.',
    ],
    'max'     => [
        'label'        => 'Максимальное количество элементов',//'Maximum Items',
        'instructions' => 'Максимально разрешённое количество элементов.',//'Specify the maximum number of allowed items.',
    ],
];
