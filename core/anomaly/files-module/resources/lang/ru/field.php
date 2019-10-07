<?php

return [
    'name'          => [
        'name'         => 'Название',//'Name',
        'instructions' => [
            'disks'   => 'Короткое название для диска.',//'Specify a short descriptive name for the disk.',
            'folders' => 'Короткое название для папки.',//'Specify a short descriptive name for the folder.',
            'files'   => 'Короткое название для файла.',//'Specify the name of this file.',
        ],
    ],
    'title'         => [
        'name'         => 'Заголовок',//'Title',
        'instructions' => 'Краткий заголовок для файла.',//'Specify a short descriptive title for this file.',
    ],
    'slug'          => [
        'name'         => 'Идентификатор',//'Slug',
        'instructions' => 'Уникальный текстовый идентификатор, используемый при формировании пути к расположению файла/папки.',//'The slug is used in building the storage location.',
    ],
    'size'          => [
        'name' => 'Размер',//'Size',
    ],
    'disk'          => [
        'name'         => 'Диск',//'Disk',
        'instructions' => 'Диск, к которому относится данная папка.',//'Choose which disk this folder belongs to.',
    ],
    'folder'        => [
        'name' => 'Папка',//'Folder',
    ],
    'adapter'       => [
        'name' => 'Адаптер',//'Adapter',
    ],
    'keywords'      => [
        'name'         => 'Ключевые слова',//'Keywords',
        'instructions' => 'Ключевые слова для упрощения организации файлов.',//'Specify any organizational keywords to help group files.',
    ],
    'mime_type'     => [
        'name' => 'MIME-типы',//'MIME Type',
        'instructions' => 'Типы данных, которые могут быть переданы через интернет с применением стандарта MIME.',
    ],
    'preview'       => [
        'name' => 'Предпросмотр',//'Preview',
    ],
    'description'   => [
        'name'         => 'Описание',//'Description',
        'instructions' => [
            'disks'  => 'Краткое описание диска',//'Briefly describe this disk.',
            'folder' => 'Краткое описание папки',//'Briefly describe this folder.',
            'files'  => 'Краткое описание файла',//'Briefly describe this file.',
        ],
    ],
    'allowed_types' => [
        'name'         => 'Разрешённые типы файлов',//'Allowed Types',
        'instructions' => 'Типы (расширения) файлов, которые разрешено хранить в данной папке.',//'Specify the file type extensions that are allowed in this folder.',
        'warning'      => 'Обратите внимание на тонкие различия между расширениями файлов, например, "jpg" и "jpeg".',//'Note subtle differences between mime types like jpg and jpeg.',
        'placeholder'  => 'pdf, png, psd, jpg, jpeg',//'pdf, psd, jpg, jpeg',
    ],
    'alt_text'      => [
        'name'         => 'Альтернативный текст',//'Alt Text',
        'instructions' => 'Альтернативный текст для изображения.',//'Specify the text alternative for an image.',
        'warning'      => 'Обычно, в качестве альтернативного текста задаётся имя файла для случая, если изображение не удалось загрузить.',//'The humanized filename is usually used as a fallback.',
    ],
    'caption'       => [
        'name'         => 'Подпись',//'Caption',
        'instructions' => 'Сопроводительный текст для изображения.',//'Specify accompanying text for an image.',
    ],
];
