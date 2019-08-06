<?php

return [
    'files'   => [
        'name'   => 'Файлы',//'Files',
        'option' => [
            'read'   => 'Доступ к разделу файлов.',//'Can access files section?',
            'write'  => 'Загрузка и редактирование файлов.',//'Can upload and edit files?',
            'delete' => 'Удаление файлов.',//'Can delete files?',
        ],
    ],
    'folders' => [
        'name'   => 'Папки',//'Folders',
        'option' => [
            'read'   => 'Доступ к разделу папок.',//'Can access folders section?',
            'write'  => 'Создание и редактирование папок.',//'Can create and edit folders?',
            'delete' => 'Удаление папок.',//'Can delete folders?',
        ],
    ],
    'disks'   => [
        'name'   => 'Диски',//'Disks',
        'option' => [
            'read'   => 'Просмотр дисков.',//'Can view disks?',
            'write'  => 'Создание и редактирование дисков.',//'Can create and edit disks?',
            'delete' => 'Удаление дисков.',//'Can delete disks?',
        ],
    ],
    'fields'  => [
        'name'   => 'Поля',//'Fields',
        'option' => [
            'manage' => 'Управление пользовательскими полями.',//'Can manage custom fields?',
        ],
    ],
];

