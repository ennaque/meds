<?php

return [
    'activate_your_account'   => [
        'subject'      => 'Активация учётной записи',//'Activate Your Account',
        'greeting'     => 'Здравствуйте, :display_name!',//'Hello :display_name!',
        'instructions' => 'Спасибо за регистрацию! Пожалуйста, активируйте свою учетную запись, нажав кнопку ниже.',//'Thank you for registering! Please activate your account by clicking the button below.',
        'button'       => 'Активировать учётную запись',//'Activate Account',
    ],
    'user_pending_activation' => [
        'subject'      => 'Пользователь ожидает активации',//'User Pending Activation',
        'instructions' => ':username только что зарегистрировался и ожидает активации. Для активации его учётной записи нажмите на кнопку ниже.',//':username has just registered and is pending activation. To activate their account click the button below.',
        'button'       => 'Активировать учётную запись',//'Activate Account',
    ],
    'reset_your_password'     => [
        'subject'      => 'Сброс пароля',//'Reset Your Password',
        'greeting'     => 'Здравствуйте, :display_name!',//'Hello :display_name!',
        'notice'       => 'С Вашего аккаунта был запрошен сброс пароля.',//'A password reset has been requested for your account.',
        'warning'      => 'Если данный запрос выполнили не Вы, то проигнорируйте это сообщение.',//'If you did not make this request, you can safely ignore this email.',
        'instructions' => 'Если Вы хотите сбросить пароль, то нажмите на кнопку ниже.',//'If you would actually like to reset your password click the button below.',
        'button'       => 'Сбросить пароль',//'Reset Password',
    ],
    'password_invalidated'    => [
        'subject'      => 'Сброс пароля',//'Reset Your Password',
        'greeting'     => 'Здравствуйте, :display_name!',//'Hello :display_name!',
        'notice'       => 'Администратор запросил сброс пароля для Вашей учётной записи.',//'A password reset has been requested for your account by an administrator.',
        'warning'      => 'Ваш текущий пароль более не действителен.',//'Your current password is no longer valid.',
        'instructions' => 'Для сброса пароля нажмите кнопку ниже.',//'Please click the button below to reset your password.',
        'button'       => 'Сбросить пароль',//'Reset Password',
    ],
    'user_has_registered'     => [
        'subject'      => 'Пользователь зарегистрирован',//'User Has Registered',
        'instructions' => ':username зарегистрирован! Чтобы посмотреть его профиль нажмите на кнопку ниже.',//':username has just registered! To view their profile click the button below.',
        'button'       => 'Посмотреть профиль',//'View Profile',
    ],
    'user_has_been_activated' => [
        'subject'      => 'Учётная запись активирована',//'Account Activated',
        'greeting'     => 'Здравствуйте, :display_name!',//'Hello :display_name!',
        'instructions' => 'Ваша учётная запись активирована.',//'Your account has been activated.',
        'button'       => 'Войти',//'Login',
    ],
];
