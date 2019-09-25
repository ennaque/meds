<?php

return [
    'type'       => [
        'label'        => 'Дополнение',//'Addon Type',
        'instructions' => 'Выберите дополнение, которое хотите добавить',//'What type of addons would you like to include?',
        'placeholder'  => 'Все дополнения',//'All Addons',
    ],
    'mode'       => [
        'label'        => 'Внешний вид',//'Mode',
        'instructions' => 'Стиль отображения поля ввода',//'What kind of input would you like to display?',
        'option'       => [
            'search'   => 'Поисковая строка',//'Search',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
        ],
    ],
    'search'     => [
        'label'        => 'Поисковые расширения',//'Search Extensions',
        'instructions' => 'Если выбрано дополнение "Расширения", то здесь Вы можете задать поисковые параметры, чтобы поиск по расширениям возвращал более конкретные результаты.',//'If the "Extensions" addon type is selected, you can define an optional search parameter here to return only extensions providing a specific service.',
        'placeholder'  => 'anomaly.module.files::adapter.*',//'anomaly.module.files::adapter.*',
    ],
    'theme_type' => [
        'label'        => 'Темы',//'Theme Type',
        'instructions' => 'Если выбрано дополнение "Темы", то Вы можете ограничить выбор тем только административными или общедоступными.',//'If the "Themes" addon type is selected, you can optional limit themes to admin or public themes only.',
        'placeholder'  => 'Административные и общедоступные',//'Admin + Public',
        'admin'        => 'Административные',//'Admin',
        'public'       => 'Общедоступные',//'Public',
    ],
];
