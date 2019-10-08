<?php

return [
    'name'             => [
        'name'         => 'Название',//'Name',
        'instructions' => [
            'roles' => 'Название группы пользователей.',//'Specify a short descriptive name for this role.',
        ],

    ],
    'description'      => [
        'name'         => 'Описание',//'Description',
        'instructions' => [
            'roles' => 'Описание группы пользователей.',//'Briefly describe this role.',
        ],
    ],
    'first_name'       => [
        'name'         => 'Имя',//'First Name',
        'instructions' => '',//'Укажите ваше настоящее имя.',//'Specify the user\'s real first name.',
    ],
    'last_name'        => [
        'name'         => 'Фамилия',//'Last Name',
        'instructions' => '',//'Укажите вашу настоящую фамилию.',//'Specify the user\'s real last name.',
    ],
    'display_name'     => [
        'name'         => 'Отображаемое имя',//'Display Name',
        'instructions' => 'Публично отображаемое имя пользователя.',//'Specify the user\'s publicly displayable name.',
    ],
    'username'         => [
        'name'         => 'Имя пользователя',//'Username',
        'instructions' => 'Ник, используемый для однозначной идентификации пользователя.',//'The username is used for uniquely identifying and displaying this user.',
    ],
    'email'            => [
        'name'         => 'Электронная почта',//'Email',
        'instructions' => 'Адрес электронной почты, который будет использован для авторизации на сайте.',//'The email is used for logging in.',
    ],
    'password'         => [
        'name'         => 'Пароль',//'Password',
        'instructions' => '',//'Specify the user\'s secure password.',
        'impersonate'  => 'Подтвердите пароль, чтобы продолжить.',//'Please confirm your current password to continue.',
    ],
    'confirm_password' => [
        'name' => 'Подтвердить пароль',//'Confirm Password',
    ],
    'slug'             => [
        'name'         => 'Идентификатор',//'Slug',
        'instructions' => [
            'roles' => 'Уникальный текстовый идентификатор, который будет использован для данной группы пользователей.',//'The slug is used in uniquely identifying this role.',
        ],
    ],
    'roles'            => [
        'name'         => 'Группы',//'Roles',
        'instructions' => 'Группа, в которую входит пользователь.',//'Specify which roles the user belongs to.',
    ],
    'permissions'      => [
        'name' => 'Разрешения',//'Permissions',
    ],
    'last_activity_at' => [
        'name' => 'Последняя активность',//'Last Activity',
    ],
    'activated'        => [
        'name'         => 'Активация',//'Activated',
        'label'        => 'Активация учётной записи пользователя.',//'Is this user activated?',
        'instructions' => 'Пользователь не сможет авторизоваться до тех пор, пока его учётная запись не будет активирована.',//'The user will not be able to login unless activated.',
    ],
    'enabled'          => [
        'name'         => 'Состояние учётной записи',//'Enabled',
        'label'        => 'Включена ли учётная запись данного пользователя?',//'Is this user enabled?',
        'instructions' => 'Пользователь не сможет авторизоваться или выполнить активацию, если его учётная запись выключена.',//'The user will not be able to login or activate if disabled.',
    ],
    'activation_code'  => [
        'name' => 'Код активации',//'Activation Code',
    ],
    'reset_code'       => [
        'name' => 'Код сброса',//'Reset Code',
    ],
    'remember_me'      => [
        'name' => 'Запомнить меня',//'Remember me',
    ],
    'status'           => [
        'name'   => 'Статус',//'Status',
        'option' => [
            'active'   => 'Активный',//'Active',
            'inactive' => 'Неактивный',//'Inactive',
            'disabled' => 'Отключённый',//'Disabled',
        ],
    ],
];
