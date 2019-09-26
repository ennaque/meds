<?php

$post = str_replace('M', '', ini_get('post_max_size'));
$file = str_replace('M', '', ini_get('upload_max_filesize'));

$system = $file > $post ? $post : $file;

return [
    'max_upload_size'      => [
        'name'         => 'Максимальный размер загружаемых файлов',//'Maximum Upload Size',
        'instructions' => 'Ограничение на максимальный размер файла, загружаемого на сервер.',//'Specify the maximum file size for uploads.',
        'warning'      => 'На данный момент, на сервер можно загрузить максимум ' . $system . 'мегабайт.',//'Your server\'s max upload size is currently ' . $system . 'MB',
    ],
    'max_parallel_uploads' => [
        'name'         => 'Максимальное количество параллельных загрузок',//'Maximum Parallel Uploads',
        'instructions' => 'Максимальное количество файлов, которые могут загружаться на сервер одновременно.',//'Specify the maximum number of files that can be uploaded at the same time.',
    ],
];
