<?php

return [
    'pages'  => [
        'name'   => 'Страницы',//'Pages',
        'option' => [
            'read'   => 'Чтение страниц.',//'Can read pages?',
            'write'  => 'Запись страниц.',//'Can write pages?',
            'delete' => 'Удаление страниц.',//'Can delete pages?',
            'preview' => 'Предпросмотр страниц.',//'Can preview pages?'
        ],
    ],
    'types'  => [
        'name'   => 'Типы страниц',//'Types',
        'option' => [
            'read'   => 'Чтение типов.',//'Can read types?',
            'write'  => 'Запись типов.',//'Can write types?',
            'delete' => 'Удаление типов.',//'Can delete types?',
            'fields' => 'Модификация полей типов страниц.',//'Can modify fields of types?',
        ],
    ],
    'fields' => [
        'name'   => 'Поля',//'Fields',
        'option' => [
            'manage' => 'Управление полями.',//'Can manage fields?',
        ],
    ],
];
