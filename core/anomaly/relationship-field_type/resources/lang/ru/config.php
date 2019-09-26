<?php

return [
    'related'    => [
        'label' => 'Связанный поток',//'Related Stream',
    ],
    'mode'       => [
        'label'  => 'Внешний вид',//'Input Mode',
        'option' => [
            'dropdown' => 'Выпадающее меню',//'Dropdown',
            'lookup'   => 'Предпросмотр',//'Lookup',
            'search'   => 'Поисковая строка',//'Search',
        ],
    ],
    'title_name' => [
        'label'        => 'Заголовок',//'Title Field',
        'placeholder'  => 'first_name',//'first_name',
        'instructions' => 'Уникальный текстовый <strong>идентификатор</strong> поля.<br>Можно задать интерпретируемые заголовки, такие как <strong>{entry.first_name} {entry.last_name}</strong><br>Титульная колонка связанного потока будет использоваться по умолчанию.',//'Specify the <strong>slug</strong> of field to display for dropdown/search options.<br>You can specify parsable titles like <strong>{entry.first_name} {entry.last_name}</strong><br>The related stream\'s title column will be used by default.',
    ],
];
