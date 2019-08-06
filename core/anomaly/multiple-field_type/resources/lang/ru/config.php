<?php

return [
    'related'    => [
        'label'        => 'Связи',//'Related Stream',
        'instructions' => 'Привязанные записи для отображения в выпадающем меню.',//'Specify the related stream entries to display in the dropdown.',
    ],
    'mode'       => [
        'label'  => 'Ввод',//'Input Mode',
        'option' => [
            'tags'       => 'Тэги',//'Tags',
            'lookup'     => 'Просмотры',//'Lookup',
            'checkboxes' => 'Чекбоксы',//'Checkboxes',
        ],
    ],
    'min'        => [
        'label'        => 'Минимальный выбор',//'Minimum Selections',
        'instructions' => 'Минимальное количество вариантов выбора.',//'Specify the minimum number of allowed selections.',
    ],
    'max'        => [
        'label'        => 'Максимальный выбор',//'Maximum Selections',
        'instructions' => 'Максимальное количество вариантов выбора.',//'Specify the maximum number of allowed selections.',
    ],
    'title_name' => [
        'label'        => 'Заголовок',//'Title Field',
        'placeholder'  => 'first_name',//'first_name',
        'instructions' => '<strong>Идентификатор</strong> поля для отображения выпадающего меню или поисковых опций<br> Можно указать анализируемые заголовки в виде <strong>{entry.first_name} {entry.last_name}</strong><br>Соответствующий столбец заголовка потока будет использован по умолчанию.',//'Specify the <strong>slug</strong> of field to display for dropdown/search options.<br>You can specify parsable titles like <strong>{entry.first_name} {entry.last_name}</strong><br>The related stream\'s title column will be used by default.',
    ],
];
