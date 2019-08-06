<?php

return [
    'name'          => [
        'name'         => 'Название',//'Name',
        'instructions' => 'Короткое название текущей панели инструментов.',//'Specify a short descriptive name for this dashboard.',
    ],
    'title'         => [
        'name'         => 'Заголовок',//'Title',
        'instructions' => 'Короткий заголовок текущего виджета.',//'Specify a short descriptive title for this widget.',
    ],
    'slug'          => [
        'name'         => 'Идентификатор',//'Slug',
        'instructions' => 'Уникальный текстовый идентификатор, который будет использоваться в URL панели инструментов.',//'The slug is used in the dashboard URL.',
    ],
    'description'   => [
        'name'         => 'Описание',//'Description',
        'instructions' => [
            'dashboards' => 'Описание панели инструментов.',//'Briefly describe this dashboard.',
            'widgets'    => 'Описание виджета.',//'Briefly describe this widget.',
        ],
    ],
    'layout'        => [
        'name'         => 'Макет',//'Layout',
        'instructions' => 'Макет, определяющий расположение виджетов панели инструментов.',//'The layout determines how you can organize dashboard widgets.',
        'option'       => [
            '24'      => 'Одна колонка',//'Single column',
            '12-12'   => 'Две колонки одинаковой ширины',//'Two equal columns',
            '16-8'    => 'Две колонки (левая шире)',//'Two columns - left weighted',
            '8-16'    => 'Две колонки (правая шире)',//'Two columns - right weighted',
            '8-8-8'   => 'Три колонки одинаковой ширины',//'Three equal columns',
            '6-12-6'  => 'Три колонки (центральная шире)',//'Three columns - center weighted',
            '12-6-6'  => 'Три колонки (левая шире)',//'Three columns - left weighted',
            '6-6-12'  => 'Три колонки (правая шире)',//'Three columns - right weighted',
            '6-6-6-6' => 'Четыре колонки одинаковой ширины',//'Four equal columns',
        ],
    ],
    'dashboard'     => [
        'name'         => 'Панель инструментов',//'Dashboard',
        'instructions' => 'Панель инструментов, которой принадлежит данный виджет.',//'Choose which dashboard this widget belongs to.',
    ],
    'extension'     => [
        'name' => 'Расширение',//'Extension',
    ],
    'pinned'        => [
        'name'         => 'Прикреплённые виджеты',//'Pinned',
        'label'        => 'Прикрепить этот виджет?',//'Pin this widget?',
        'instructions' => 'Прикреплённые виджеты растягиваются на всю доступную ширину и прижимаются к верхней части панели инструментов.',//'Pinned widgets are full width and pushed to the top of the dashboard.',
    ],
    'allowed_roles' => [
        'name'         => 'Разрешённые группы',//'Allowed Roles',
        'instructions' => [
            'dashboards' => 'Группы пользователей, которые могут взаимодействовать с данной панелью инструментов.',//'Specify which user roles can access this dashboard.',
            'widgets'    => 'Группы пользователей, которые могут видеть данный виджет.',//'Specify which user roles can see this widget.',
        ],
        'warning'      => [
            'dashboards' => 'Если разрешённые группы пользователей не указаны, то все, у кого есть доступ к дополнению, смогут получить доступ к данной панели инструментов.',//'If no roles are specified then everyone with access to this addon can access this dashboard.',
            'widgets'    => 'Если разрешённые группы пользователей не указаны, то все, у кого есть доступ к дополнению, смогут видеть данный виджет.',//'If no roles are specified then everyone with access to this addon can see this widget.',
        ],
    ],
];
