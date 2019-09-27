<?php

return [
    'mode'          => [
        'label'        => 'Внешний вид',//'Mode',
        'instructions' => 'Стиль отображения поля выбора региона.',//'What kind of input would you like to display?',
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
        'instructions' => 'Область (регион), используемая по умолчанию (если таковая имеется).',//'Select a default state if any.',
    ],
];
