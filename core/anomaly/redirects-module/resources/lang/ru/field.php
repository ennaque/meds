<?php

return [
    'from'   => [
        'name'         => 'Откуда',//'From',
        'label'        => 'Перенаправить откуда',//'Redirect From',
        'placeholder'  => [
            'redirects' => 'foo/bar/{var}',
            'domains'   => 'olddomain.com',
        ],
        'instructions' => [
            'redirects' => 'Точный путь или шаблон для перенаправления. Например: <strong>foo/bar/{var}</strong>, <strong>foo/bar</strong> или <strong>http://{account}.old.com/{path}</strong>.',//'Specify an exact path or pattern to redirect. For example <strong>foo/bar/{var}</strong> or <strong>foo/bar</strong> or <strong>http://{account}.old.com/{path}</strong>.',
            'domains'   => 'Домен для перенаправления. Если префикс или порт являются нестандартными, то они также должны быть указаны.',//'Specify the domain to redirect. Include any prefix and a port if not standard.',
        ],
        'warning'      => [
            'redirects' => 'В шаблон или путь не должны быть включены языковые подсказки, такие как <strong>ru</strong>/foo/bar/{var}',//'Do not include locale hints like <strong>en</strong>/foo/bar/{var}',
            'domains'   => 'В шаблон или путь не должна быть включена никакая информация о пути.',//'Do not include any path information.',
        ],
    ],
    'to'     => [
        'name'         => 'Куда',//'To',
        'label'        => 'Перенаправить куда',//'Redirect To',
        'placeholder'  => [
            'redirects' => 'bar/{var}',
            'domains'   => 'newdomain.com',
        ],
        'instructions' => [
            'redirects' => 'Точный путь, замена шаблона или URL-адрес для указания того, куда будет производиться перенаправление. Например: <strong>bar/{var}</strong>, <strong>bar/baz</strong> или <strong>https://new.com/account/{account}/{path}</strong>.',//'Specify an exact path, pattern replacement or URL to redirect to. For example <strong>bar/{var}</strong> or <strong>bar/baz</strong> or <strong>https://new.com/account/{account}/{path}</strong>.',
            'domains'   => 'Домен на который будет выполняться перенаправление. Если префикс или порт являются нестандартными, то они также должны быть указаны.',//'Specify the domain to redirect to. Include any prefix and a port if not standard.',
        ],
        'warning'      => [
            'domains' => 'Если поле останется пустым, то будет использован сконфигурированный первичный домен: <strong>'/*'Leave blank to use the configured primary domain: <strong>'*/ . config(
                    'streams::system.domain'
                ) . '</strong>',
        ],
    ],
    'status' => [
        'name'         => 'Статус',//'Status',
        'instructions' => 'Тип перенаправления.',//'What kind of redirect is this?',
        'option'       => [
            '301' => '301 - постоянное перенаправление',//'301 - Permanent Redirect',
            '302' => '302 - временное перенаправление',//'302 - Temporary Redirect',
        ],
    ],
    'secure' => [
        'name'         => 'Безопасность',//'Secure',
        'label'        => 'Перенаправление за защищённый URL.',//'Redirect to a secure URL?',
        'instructions' => 'Принудительная установка защищённого соединения при перенаправлении.',//'Do you want to force a secure connection when redirecting?',
        'warning'      => 'Данная опция игнорируется, если протокол включён в значение "<strong>Перенаправить куда</strong>".',//'This option is ignored if a protocol is included in the <strong>Redirect To</strong> value.',
    ],
];
