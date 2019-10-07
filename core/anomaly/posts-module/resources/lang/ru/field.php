<?php

return [
    'name'             => [
        'name'         => 'Название',//'Name',
        'instructions' => [
            'types'      => 'Короткое название для данного типа постов.',//'Specify a short descriptive name for this post type.',
            'categories' => 'Короткое название для данной категории.',//'Specify a short descriptive name for this category.',
        ],
    ],
    'title'            => [
        'name'         => 'Заголовок',//'Title',
        'instructions' => 'Заголовок поста.',//'Specify a short descriptive title for this post.',
    ],
    'slug'             => [
        'name'         => 'Идентификатор',//'Slug',
        'instructions' => [
            'types'      => 'Уникальный текстовый идентификатор, используемый при создании в базе данных таблиц для хранения постов данного типа.',//'The slug is used in making the database table for posts of this type.',
            'categories' => 'Уникальный текстовый идентификатор, используемый при формировании URL категории.',//'The slug is used in building the category\'s URL.',
            'posts'      => 'Уникальный текстовый идентификатор, используемый при формировании URL постов.',//'The slug is used in building the post\'s URL.',
        ],
    ],
    'description'      => [
        'name'         => 'Описание',//'Description',
        'instructions' => [
            'types'      => 'Краткое описание типа постов.',//'Briefly describe the post type.',
            'categories' => 'Краткое описание категории.',//'Briefly describe the category.',
        ],
        'warning'      => 'Описание может как отображаться, так и не отображаться, что зависит от того, как был создан сайт.',//'This may or may not be displayed publicly depending on how your website was built.',
    ],
    'summary'          => [
        'name'         => 'Резюме',//'Summary',
        'instructions' => 'Короткое резюме, представляющее данный пост.',//'Write a brief summary to introduce this post.',
    ],
    'category'         => [
        'name'         => 'Категория',//'Category',
        'instructions' => 'Категория, к которой относится данный пост.',//'Choose which category this post belongs to.',
    ],
    'meta_title'       => [
        'name'         => 'Мета-заголовок',//'Meta Title',
        'instructions' => 'Заголовок для SEO.',//'Specify the SEO title.',
        'warning'      => [
            'posts'      => 'По умолчанию в качестве мета-заголовка используется заголовок поста.',//'The post title will be used by default.',
            'types'      => 'По умолчанию в качестве мета-заголовка используется название типа.',//'The type name will be used by default.',
            'categories' => 'По умолчанию в качестве мета-заголовка используется название категории.',//'The category name will be used by default.',
        ],
    ],
    'meta_description' => [
        'name'         => 'Мета-описание',//'Meta Description',
        'instructions' => 'Описание для SEO.',//'Specify the SEO description.',
    ],
    'theme_layout'     => [
        'name'         => 'Макет темы',//'Theme Layout',
        'instructions' => 'Макет темы оформления, в который будет обёрнут <strong>макет поста</strong>.',//'Specify the theme layout to wrap the <strong>post layout</strong> with.',
    ],
    'layout'           => [
        'name'         => 'Макет поста',//'Post Layout',
        'instructions' => 'Макет, используемый для отображения содержимого поста.',//'The layout is used for displaying the post\'s content.',
    ],
    'tags'             => [
        'name'         => 'Теги',//'Tags',
        'instructions' => 'Организационные теги, которые помогут сгруппировать данный пост с другими.',//'Specify any organizational tags to help group your post with others.',
    ],
    'enabled'          => [
        'name'         => 'Состояние поста',//'Enabled',
        'label'        => '"Включён" или "отключён" данный пост.',//'Is this post enabled?',
        'instructions' => 'Если пост отключён, то доступ к нему можно получить из панели управления по защищённой ссылке предварительного просмотра.',//'If disabled, you can still access a secure preview link in the control panel.',
        'warning'      => 'Данный пост должен быть включён, прежде чем его можно будет посмотреть <strong>публично</strong>.',//'This post must be enabled before it can be viewed <strong>publicly</strong>.',
    ],
    'featured'         => [
        'name'         => 'Рекомендации',//'Featured',
        'label'        => 'Является ли данный пост рекомендуемым?',//'Is this a featured post?',
        'instructions' => 'Рекомендуемые посты могут быть использованы для привлечения внимания к каким-то конкретным статьям.',//'Featured posts can be used to bring attention to specific posts.',
        'warning'      => 'Эффект от данной опции зависит от того, как был сделан сайт.',//'This may or may not have an effect depending on how your website was built.',
    ],
    'publish_at'       => [
        'name'         => 'Дата и время публикации',//'Publish Date/Time',
        'instructions' => 'Дата и время публикации данного поста.',//'Specify the publish date/time for this post.',
        'warning'      => 'Если установить будущие дату и время, то пост будет оставаться невидимым до тех пор, пока установленные дата/время не наступят.',//'If set to the future, this post will not be visible until then.',
    ],
    'author'           => [
        'name'         => 'Автор',//'Author',
        'instructions' => 'Автор данного поста.',//'Specify the publicly displayed author of this post.',
    ],
    'status'           => [
        'name'   => 'Статус',//'Status',
        'option' => [
            'live'      => 'Живой',//'Live',
            'draft'     => 'Черновой вариант',//'Draft',
            'scheduled' => 'Запланирован',//'Scheduled',
        ],
    ],
    'content'          => [
        'name' => 'Содержимое',//'Content',
    ],
    'type'             => [
        'name' => 'Тип',//'Type',
    ],
];
