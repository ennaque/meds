<?php

return [
    'type'      => [
        'label'        => 'Тип идентификатора',//'Slug Type',
        'instructions' => '',//'What kind of slugs do you want to generate?',
    ],
    'slugify'   => [
        'label'        => 'Slugify',//'Slugify',
        'instructions' => 'Enter the field slug to automatically slugify values if any.',//'Enter the field slug to automatically slugify values if any.',
    ],
    'lowercase' => [
        'label'        => 'Нижний регистр',//'Lowercase',
        'instructions' => 'Перевод всех символов вводимого текста в нижний регистр.',//'Force all characters to lowercase?',
    ],
    'min'       => [
        'label'        => 'Минимальная длина',//'Minimum Length',
        'instructions' => 'Минимально разрешённая длинна вводимого текста.',//'Specify the minimum input length allowed.',
    ],
    'max'       => [
        'label'        => 'Максимальная длина',//'Maximum Length',
        'instructions' => 'Максимально разрешённая длинна вводимого текста.',//'Specify the maximum input length allowed.',
    ],
];
