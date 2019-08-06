<?php

return [
    'max_attempts'      => [
        'label'        => 'Количество попыток авторизации',//'Allowed Login Attempts',
        'instructions' => 'Максимально допустимое количество неудачных попыток входа в систему за время, заданное в пункте <strong>Интервал между попытками</strong>.',//'How many failed login attempts are allowed within the <strong>Throttle Interval</strong>?',
    ],
    'throttle_interval' => [
        'label'        => 'Интервал между попытками',//'Throttle Interval',
        'instructions' => 'Если пользователь превысит заданное выше <strong>Количество попыток авторизации</strong> за время, указанное здесь (в минутах), то он будет заблокирован.',//'If the <strong>Allowed Login Attempts</strong> is reached within the specified number of minutes, lockout the user.',
    ],
    'lockout_interval'  => [
        'label'        => 'Интервал блокировки',//'Lockout Interval',
        'instructions' => 'Интервал в минутах, на который пользователь будет заблокирован при привышении заданного количества попыток авторизации.',//'Specify how many minutes a throttled user is locked out before they can attempt to login again.',
    ],
];
