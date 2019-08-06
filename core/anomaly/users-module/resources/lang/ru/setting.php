<?php

return [
    'login'                     => [
        'label'        => 'Логин',//'Login Field',
        'instructions' => 'Информация, используемая в качестве логина пользователя.',//'Which field should be used for logging in?',
        'option'       => [
            'email'    => 'Электронная почта',//'Email',
            'username' => 'Имя пользователя',//'Username',
        ],
    ],
    'activation_mode'           => [
        'label'        => 'Активация',//'Activation Mode',
        'instructions' => 'Способ активации учётных записей пользователей.',//'How should users be activated after they register?',
        'option'       => [
            'email'     => 'Отправка сообщения активации на электронную почту пользователя.',//'Send an activation email to the user.',
            'manual'    => 'Ручная активация администратором.',//'Require an administrator to manually activate the user.',
            'automatic' => 'Автоматическая активация сразу после регистрации.',//'Automatically activate the user after they register.',
        ],
    ],
    'password_length'           => [
        'label'        => 'Длина пароля',//'Password Length',
        'instructions' => 'Минимально допустимое количество символов, из которых состоит пароль пользователя.',//'Specify the minimum length for passwords.',
    ],
    'password_requirements'     => [
        'label'        => 'Требования к паролю',//'Password Requirements',
        'instructions' => 'Требования, касающиеся наличия в паролях пользователей тех или иных символов.',//'Specify the character requirements for passwords.',
        'option'       => [
            '[0-9]'        => 'Пароль должен содержать хотя бы одну цифру.',//'The password must contain at least one integer.',
            '[a-z]'        => 'Пароль должен содержать хотя бы одну прописную букву.',//'The password must contain at least one lowercase letter.',
            '[A-Z]'        => 'Пароль должен содержать хотя бы одну заглавную букву.',//'The password must contain at least one uppercase letter.',
            '[!@#$%^&*()]' => 'Пароль должен содержать хотя бы один нестандартный символ (знаки препинания, арифметические знаки, скобки и т.п.).',//'The password must contain at least one special character.',
        ],
    ],
    'new_user_notification'     => [
        'name'         => 'Уведомление о новом пользователе',//'New User Notification',
        'instructions' => 'Кто должен получать уведомления о новых пользователях?',//'Who should be notified of new users?',
    ],
    'pending_user_notification' => [
        'name'         => 'Уведомление о ожидании активации',//'Pending User Notification',
        'instructions' => 'Кто должен получать уведомления о запросах на активацию учётных записей пользователей?',//'Who should be notified of users requiring activation?',
    ],
];
