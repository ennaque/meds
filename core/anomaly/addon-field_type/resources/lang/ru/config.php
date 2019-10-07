<?php

return [
    'type'       => [
        'label'        => 'Тип дополнения',//'Addon Type',
        'instructions' => 'Какой тип дополнения Вы хотите добавить?',//'What type of addons would you like to include?',
        'placeholder'  => 'Все дополнения',//'All Addons',
    ],
    'mode'       => [
        'label'        => 'Режим',//'Mode',
        'instructions' => 'Какой тип ввода Вы хотели бы отобразить?',//'What kind of input would you like to display?',
        'option'       => [
            'search'   => 'Поиск',//'Search',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
        ],
    ],
    'search'     => [
        'label'        => 'Поисковые расширения',//'Search Extensions',
        'instructions' => 'Если выбран тип дополнения "Расширения", то здесь Вы можете задать поисковые параметры, чтобы поиск возвращал более конкретные результаты.',//'If the "Extensions" addon type is selected, you can define an optional search parameter here to return only extensions providing a specific service.',
        'placeholder'  => 'anomaly.module.files::adapter.*',//'anomaly.module.files::adapter.*',
    ],
    'theme_type' => [
        'label'        => 'Тип темы',//'Theme Type',
        'instructions' => 'Если выбран тип дополнения "Темы", то Вы можете ограничить перечень тем только административными или общедоступными темами.',//'If the "Themes" addon type is selected, you can optional limit themes to admin or public themes only.',
        'placeholder'  => 'Административные и общедоступные',//'Admin + Public',
        'admin'        => 'Административные',//'Admin',
        'public'       => 'Общедоступные',//'Public',
    ],
];