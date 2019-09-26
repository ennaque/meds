<?php

return [
    'folders' => [
        'name'         => 'Папки',//'Folders',
        'instructions' => 'Список папок, доступных для отображения в поле. При указании пустого списка будут отображаться все папки.',//'Specify which folders are available for this field. Leave blank to display all folders.',
        'warning'      => 'Уже существующие права доступа к папкам имеют приоритет над правами доступа к выбранным папкам.',//'Existing folder permissions take precedence over selected folders.',
    ],
    'min'     => [
        'label'        => 'Минимальное количество файлов',//'Minimum Selections',
        'instructions' => 'Минимальное количество файлов, которое можно загрузить.',//'Enter the minimum number of allowed selections.',
    ],
    'max'     => [
        'label'        => 'Максимальное количество файлов',//'Maximum Selections',
        'instructions' => 'Максимальное количество файлов, которое можно загрузить.',//'Enter the maximum number of allowed selections.',
    ],
    'mode'    => [
        'name'         => 'Загрузка и выбор файлов',//'Input Mode',
        'instructions' => 'Функции, предоставляемые файловым полем.',//'How should users provide file input?',
        'option'       => [
            'default' => 'Загрузка и/или выбор файлов.',//'Upload and/or select files.',
            'select'  => 'Только выбор файлов.',//'Select files only.',
            'upload'  => 'Только загрузка файлов.',//'Upload files only.',
        ],
    ],
];
