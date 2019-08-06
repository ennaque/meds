<?php

return [
    'folders'       => [
        'name'         => 'Папки',//'Folders',
        'instructions' => 'Список папок, доступных для этого поля. При указании пустого списка будут отображаться все папки.',//'Specify which folders are available for this field. Leave blank to display all folders.',
        'warning'      => 'Существующие права доступа к папкам имеют приоритет над правами доступа к выбранным папкам.',//'Existing folder permissions take precedence over selected folders.',
    ],
    'max'           => [
        'name'         => 'Максимальный размер',//'Max Upload Size',
        'instructions' => 'Максимально допустимый размер загружаемого файла в <strong>мегабайтах</strong>.',//'Specify the max upload size in <strong>megabytes</strong>.',
        'warning'      => 'Если максимально допустимый размер файла не указан, то он будет ограничен максимальным размером папки, в которую загружается файл, а затем - ограничением сервера.',//'If not specified the folder max and then server max will be used instead.',
    ],
    'mode'          => [
        'name'         => 'Ввод',//'Input Mode',
        'instructions' => 'Тип выбора и загрузки файла.',//'How should users provide file input?',
        'option'       => [
            'default' => 'Загрузка и/или выбор файла.',//'Upload and/or select files.',
            'select'  => 'Только выбор файла.',//'Select files only.',
            'upload'  => 'Только загрузка файла.',//'Upload files only.',
        ],
    ],
    'allowed_types' => [
        'name'         => 'Разрешённые типы файлов',//'Allowed Types',
        'instructions' => 'Типы (расширения) файлов, загрузка которых разрешена для данного поля.',//'Specify the file type extensions that are allowed for this field.',
        'warning'      => 'В перечне указанных расширений файлов не могут содержаться расширения, которых нет в списке разрешённых типов файлов папки.',//'Allowed types must be compatible with the folder\'s allowed types.',
        'placeholder'  => 'pdf, png, psd, jpg, jpeg',//'pdf, psd, jpg, jpeg',
    ],
];
