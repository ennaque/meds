<?php

return [
    'dashboards' => [
        'name'   => 'Панели инструментов',//'Dashboards',
        'option' => [
            'read'   => 'Доступ к разделу панелей инструментов.',//'Can access dashboards section.',
            'write'  => 'Создание, редактирование и перестановка панелей инструментов.',//'Can create, edit, and rearrange dashboards.',
            'delete' => 'Удаление панелей инструментов.',//'Can delete dashboards.',
        ],
    ],
    'widgets'    => [
        'name'   => 'Виджеты',//'Widgets',
        'option' => [
            'read'   => 'Доступ к разделу виджетов.',//'Can access widgets section.',
            'write'  => 'Создание и редактирование виджетов.',//'Can create and edit widgets.',
            'delete' => 'Удаление виджетов.',//'Can delete widgets.',
        ],
    ],
];
