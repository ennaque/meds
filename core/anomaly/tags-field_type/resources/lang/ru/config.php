<?php

return [
    'min'           => [
        'label'        => 'Минимальное количество',//'Minimum Values',
        'instructions' => 'Минимальное количество тегов, которое разрешено указывать.',//'Enter the minimum number of allowed values if any.',
    ],
    'max'           => [
        'label'        => 'Максимальное количество',//'Maximum Values',
        'instructions' => 'Максимальное количество тегов, которое разрешено указывать.',//'Enter the maximum number of allowed values if any.',
    ],
    'filter'        => [
        'label'        => 'Фильтр',//'Filter',
        'instructions' => 'Список фильтров, применимых к тегам. В качестве фильтра также может быть указана строка-шаблон, такая как, например, <strong>https://*.com</strong>.',//'Specify any filters to apply to the tags. You may also enter string matching patterns like <strong>https://*.com</strong>.',
    ],
    'options'       => [
        'label'        => 'Опции',//'Options',
        'instructions' => 'Каждая опция должна быть указана с новой строки.',//'Enter each option on a new line.',
        'placeholder'  => 'example',//'example',
    ],
    'enforce_options'       => [
        'label'        => 'Вырианты исполнения',//'Enforce Options',
        'instructions' => 'Включите, чтобы разрешить ввод в поле <em>только</em> перечисленных параметров.',//'Enable to allow <em>only</em> the above options as input.',
    ],
    'default_value' => [
        'label'        => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Значение по умолчанию, которое будет указано в поле.',//'Enter default values if any.',
    ],
];