<?php

return [
    'title'            => [
        'name'         => 'Заголовок',//'Title',
        'instructions' => 'Название страницы.',//'Specify a short descriptive name for this page.',
    ],
    'slug'             => [
        'name'         => 'Идентификатор',//'Slug',
        'instructions' => [
            'types' => 'Уникальный текстовый идентификатор, используемый при создании в базе данных таблицы для страниц данного типа.',//'The slug is used in making the database table for pages of this type.',
            'pages' => 'Уникальный текстовый идентификатор, используемый при создании URL страницы.',//'The slug is used in building the page\'s URL.',
        ],
    ],
    'meta_title'       => [
        'name'         => 'Мета-заголовок',//'Meta Title',
        'instructions' => 'Заголовок для SEO.',//'Specify the SEO title.',
        'warning'      => 'По умолчанию в качестве мета-заголовка используется обычный заголовок страницы.',//'The page title will be used by default.',
    ],
    'meta_description' => [
        'name'         => 'Мета-описание',//'Meta Description',
        'instructions' => 'Описание страницы для SEO.',//'Specify the SEO description.',
    ],
    'name'             => [
        'name'         => 'Название',//'Name',
        'instructions' => 'Название данного типа страниц.',//'Specify a short descriptive name for this page type.',
    ],
    'description'      => [
        'name'         => 'Описание',//'Description',
        'instructions' => 'Описание данного типа страниц.',//'Briefly describe this page type.',
    ],
    'theme_layout'     => [
        'name'         => 'Тема оформления',//'Theme Layout',
        'instructions' => 'Макет темы оформления, в который будет обёрнут <strong>макет страницы</strong>.',//'Specify the theme layout to wrap the <strong>page layout</strong> with.',
    ],
    'layout'           => [
        'name'         => 'Макет страницы',//'Page Layout',
        'instructions' => 'Макет, используемый для отображения содержимого страницы.',//'The layout is used for displaying the page\'s content.',
    ],
    'allowed_roles'    => [
        'name'         => 'Разрешённые группы',//'Allowed Roles',
        'instructions' => 'Группы пользователей, которые имеют доступ к данной странице.',//'Specify which user roles can access this page.',
        'warning'      => 'Если разрешённые группы пользователей не указаны, то доступ к данной странице будет у всех.',//'If no roles are specified then everyone can access this page.',
    ],
    'visible'          => [
        'name'         => 'Видимость',//'Visible',
        'label'        => 'Отображение страницы в навигации.',//'Display this page in navigation?',
        'instructions' => 'Опция, позволяющая скрыть или показать данную страницу в страничной навигационной <strong>структуре</strong>.',//'Disable to hide this page from page based navigation <strong>structure</strong>.',
        'warning'      => 'Эффект от этой опции зависит от того, как был сделан сайт.',//'This may or may not have an effect depending on how your website was built.',
    ],
    'exact'            => [
        'name'         => 'Точный URI',//'Exact URI',
        'label'        => 'Точное совпадение URI.',//'Require an exact URI match?',
        'instructions' => 'Отключите данную опцию чтобы разрешить для этой страницы настраиваемые параметры, следующие за URI.',//'Disable to allow custom parameters following the URI for this page.',
    ],
    'enabled'          => [
        'name'         => 'Состояние страницы',//'Enabled',
        'label'        => 'Состояние страницы',//'"Включена" или "отключена" данная страница.',//'Is this page enabled?',
        'instructions' => '"Включена" или "отключена" данная страница. Если страница отключена, то доступ к ней можно получить из панели управления по защищённой ссылке предварительного просмотра.',//'If disabled, you can still access a secure preview link in the control panel.',
        'warning'      => 'Данная страница должна быть включена, прежде чем её можно будет посмотреть <strong>публично</strong>.',//'This page must be enabled before it can be viewed <strong>publicly</strong>.',
    ],
    'home'             => [
        'name'         => 'Домашняя страница',//'Home Page',
        'label'        => 'Домашняя страница',//'Флаг того, является ли страница домашней.',//'Is this the home page?',
        'instructions' => 'Домашняя страница используется в качестве начальной страницы Вашего сайта.',//'The home page is the default landing page for your website.',
    ],
    'parent'           => [
        'name'         => 'Родительская страница',//'Parent Page',
        'instructions' => 'Можно указать родительскую страницу, чтобы организовать страницы в родительскую URI-структуру.',//'Specify a parent page to organize it within the parent\'s URI structure.',
    ],
    'handler'          => [
        'name'         => 'Обработчик',//'Handler',
        'instructions' => 'Обработчик страницы отвечает за создание полного HTTP-ответа на запрос страницы.',//'The page handler is responsible for building the entire HTTP response for a page.',
    ],
    'content'          => [
        'name' => 'Содержимое',//'Content',
    ],
    'path'             => [
        'name' => 'Путь',//'Path',
    ],
    'type'             => [
        'name' => 'Тип',//'Type',
    ],
];
