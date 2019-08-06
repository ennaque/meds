<?php

return [
    'mode'          => [
        'label'        => 'Внешний вид',//'Mode',
        'instructions' => 'Внешний вид поля выбора области.',//'What kind of input would you like to display?',
        'option'       => [
            'input'    => 'Простой текстовый ввод',//'Text Input',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
            'search'   => 'Поисковая строка',//'Search',
        ],
    ],
    'countries'     => [
        'label'        => 'Страны',//'Countries',
        'instructions' => 'Перечень стран, список областей, регионов и провинций которых будет отображаться в поле.',//'Specify the countries to display states/provinces for.',
    ],
    'default_value' => [
        'name'         => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Область, используемая по умолчанию (если таковая имеется).',//'Select a default state if any.',
    ],
];
