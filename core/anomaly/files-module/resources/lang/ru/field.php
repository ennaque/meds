<?php

return [
    'name'          => [
        'name'         => 'Название',//'Name',
        'instructions' => [
            'disks'   => 'Название диска.',//'Specify a short descriptive name for the disk.',
            'folders' => 'Название папки.',//'Specify a short descriptive name for the folder.',
            'files'   => 'Название файла.',//'Specify the name of this file.',
        ],
    ],
    'title'         => [
        'name'         => 'Заголовок',//'Title',
        'instructions' => 'Заголовок файла.',//'Specify a short descriptive title for this file.',
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
        'instructions' => 'Диск, на котором располагается папка.',//'Choose which disk this folder belongs to.',
    ],
    'folder'        => [
        'name' => 'Папка',//'Folder',
    ],
    'adapter'       => [
        'name' => 'Адаптер',//'Adapter',
    ],
    'keywords'      => [
        'name'         => 'Ключевые слова',//'Keywords',
        'instructions' => 'Ключевые слова, позволяющие упростить организацию файлов в группы.',//'Specify any organizational keywords to help group files.',
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
            'disks'  => 'Описание диска.',//'Briefly describe this disk.',
            'folder' => 'Описание папки.',//'Briefly describe this folder.',
            'files'  => 'Описание файла.',//'Briefly describe this file.',
        ],
    ],
    'allowed_types' => [
        'name'         => 'Разрешённые типы файлов',//'Allowed Types',
        'instructions' => 'Типы (расширения) файлов, которые разрешено хранить папке.',//'Specify the file type extensions that are allowed in this folder.',
        'warning'      => 'Обратите внимание на тонкие различия между расширениями файлов. Так, например, формат изображений JPEG обозначается расширениями "jpg" и "jpeg", но при этом каждое заданное в списке расширение сервер будет считать отдельным типом файла.',//'Note subtle differences between mime types like jpg and jpeg.',
        'placeholder'  => 'pdf, png, psd, jpg, jpeg',//'pdf, psd, jpg, jpeg',
    ],
    'alt_text'      => [
        'name'         => 'Альтернативный текст',//'Alt Text',
        'instructions' => 'Альтернативный текст для изображения.',//'Specify the text alternative for an image.',
        'warning'      => 'Обычно, в качестве альтернативного текста задаётся имя файла на тот случай, если изображение не загрузилось.',//'The humanized filename is usually used as a fallback.',
    ],
    'caption'       => [
        'name'         => 'Подпись',//'Caption',
        'instructions' => 'Сопроводительный текст для изображения.',//'Specify accompanying text for an image.',
    ],
];
