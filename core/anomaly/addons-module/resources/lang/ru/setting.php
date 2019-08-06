<?php

return [
    'allow_update'   => [
        'name'         => 'Резрешить обновление',//'Allow Updating',
        'instructions' => 'Резрешить обновление дополнений в рабочем режиме с учётом их ограничений?',//'Allow updating addons within their constraints while in production mode?',
    ],
    'allow_download' => [
        'name'         => 'Резрешить загрузку',//'Allow Downloading',
        'instructions' => 'Резрешить загрузку новых дополнений в рабочем режиме?',//'Allow downloading new addons while in production mode?',
        'warning'      => 'Это может привести к изменениям в файле <strong>composer.json</strong>',//'This may cause changes to <strong>composer.json</strong>',
    ],
    'allow_removal'  => [
        'name'         => 'Резрешить удаление',//'Allow Removing',
        'instructions' => 'Резрешить удаление обновлений в рабочем режиме?',//'Allow removing addons while in production mode?',
        'warning'      => 'Это может привести к изменениям в файле <strong>composer.json</strong>',//'This may cause changes to <strong>composer.json</strong>',
    ],
];
