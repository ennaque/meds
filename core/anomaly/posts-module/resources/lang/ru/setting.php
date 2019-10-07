<?php

return [
    'permalink_structure' => [
        'label'        => 'Структура постоянной ссылки',//'Permalink Structure',
        'instructions' => 'Настройка структуры URL-адресов постоянных ссылок на посты и архивов. Данная настройка может улучшить эстетичность ссылок, повысить удобство их использования и обеспечить между ними прямую совместимость.',//'Customize the URL structure for your permalinks and archives. This can improve the aesthetics, usability, and forward-compatibility of your links.',
    ],
    'module_segment'      => [
        'label'        => 'Раздел модулей',//'Module Segment',
        'instructions' => 'Нестандартный URI модуля постов.',//'Define a custom segment URI for the the Posts module.',
    ],
    'category_segment'    => [
        'label'        => 'Раздел категорий',//'Category Segment',
        'instructions' => 'Нестандартный URI раздела URL-адресов категорий.',//'Define a custom category segment URI for the category URLs.',
    ],
    'tag_segment'         => [
        'label'        => 'Раздел тегов',//'Tag Segment',
        'instructions' => 'Нестандартный раздел тегов для их URL-адресов.',//'Define a custom tag segment for the tag URLs.',
    ],
    'posts_per_page'      => [
        'label'        => 'Количество постов на страницу',//'Posts Per Page',
        'instructions' => 'Количество постов, которое может быть отображено на странице сайта.',//'Define how many posts to display per page on your website.',
    ],
    'ttl'                 => [
        'label'        => 'Время жизни (TTL)',//'Time to live (TTL)',
        'instructions' => 'То, как долго (в минутах) кэшируются посты перед обновлением содержимого.',//'How long (in minutes) do you want to cache posts before before serving fresh content?',
    ],
];
