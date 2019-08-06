<?php

return [
    'users'    => [
        'name'   => 'Пользователи',//'Users',
        'option' => [
            'read'         => 'Доступ к разделу пользователей.',//'Can access users section.',
            'write'        => 'Создание и редактирование пользователей.',//'Can create and edit users.',
            'write_admins' => 'Создание и редактирование администраторов.',//'Can create and edit admins.',
            'impersonate'  => 'Возможность выдавать себя за другого пользователя.',//'Can impersonate other users.',
            'reset'        => 'Сброс пользователей.',//'Can reset users.',
            'delete'       => 'Удаление пользователей.',//'Can delete users.',
        ],
    ],
    'roles'    => [
        'name'   => 'Группы',//'Roles',
        'option' => [
            'read'   => 'Доступ к разделу групп пользователей.',//'Can access roles section.',
            'write'  => 'Создание и редактирование групп пользователей.',//'Can create and edit roles.',
            'delete' => 'Удаление групп пользователей.',//'Can delete roles.',
        ],
    ],
    'fields'   => [
        'name'   => 'Поля',//'Fields',
        'option' => [
            'manage' => 'Управление пользовательскими полями.',//'Can manage custom fields.',
        ],
    ],
    'settings' => [
        'name'   => 'Настройки',//'Settings',
        'option' => [
            'manage' => 'Управление настройками дополнения.',//'Can manage addon settings.',
        ],
    ],
];
