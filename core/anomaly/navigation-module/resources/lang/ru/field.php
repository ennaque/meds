<?php

return [
    'name'          => [
        'name'         => 'Название',//'Name',
        'instructions' => [
            'menus' => '',//'Specify a short descriptive name for this menu.',
        ],
    ],
    'slug'          => [
        'name'         => 'Идентификатор',//'Slug',
        'instructions' => 'Уникальный текстовый идентификатор, который будет использоваться при отображении меню.',//'The slug is used when displaying the menu.',
    ],
    'description'   => [
        'name'         => 'Описание',//'Description',
        'instructions' => 'Краткое описание меню навигации.',//'Briefly describe this navigation menu.',
    ],
    'target'        => [
        'name'         => 'Открытие ссылки',//'Target',
        'instructions' => 'То, как будет открываться ссылка при нажатии на неё.',//'How does this link open when clicked?',
        'option'       => [
            'self'  => 'Открывать ссылку в текущем окне.',//'Open in the current window.',
            'blank' => 'Открывать ссылку в новом окне.',//'Open in a new window.',
        ],
    ],
    'menu'          => [
        'name' => 'Меню',//'Menu',
    ],
    'type'          => [
        'name' => 'Тип',//'Type',
    ],
    'class'         => [
        'name'         => 'Класс',//'Class',
        'instructions' => 'Любые дополнительные классы ссылок в соответствии с инструкциями разработчика.',//'Specify any additional link classes as instructed by your developer.',
    ],
    'allowed_roles' => [
        'name'         => 'Разрешённые группы',//'Allowed Roles',
        'instructions' => 'Группы пользователей, которые могут видеть данную ссылку.',//'Specify which user roles can see this link.',
        'warning'      => 'Если разрешённые группы пользователей не указаны, то все смогут видеть данную ссылку.',//'If no roles are specified then everyone can see this link.',
    ],
];
