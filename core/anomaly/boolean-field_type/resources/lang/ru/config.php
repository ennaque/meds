<?php

return [
    'mode'          => [
        'label'        => 'Стиль отображения',//'Mode',
        'instructions' => 'Стиль отображения логического поля.',//'What kind of input would you like to display?',
        'option'       => [
            'switch'   => 'Переключатель',//'Switch',
            'checkbox' => 'Чекбокс',//'Checkbox',
            'dropdown' => 'Выпадающее меню',//'Dropdown',
            'radio'    => 'Радиокнопки',//'Radio Buttons',
        ],
    ],
    'label'         => [
        'label'        => 'Надпись',//'Choice Label',
        'instructions' => 'Текст, который отображается рядом с полем.',//'This label is displayed right next to the input.',
    ],
    'on_text'       => [
        'label'        => 'Текст в состоянии "ВКЛ"',//'"On" Text',
        'instructions' => 'Текст, который будет использоваться при состоянии "ВКЛ" логического поля.',//'This text will be used for the switch\'s "on" state.',
        'placeholder'  => 'ДА',//'YES',
    ],
    'on_color'      => [
        'label'        => 'Цвет в состоянии "ВКЛ"',//'"On" Color',
        'instructions' => 'Цвет, который будет использоваться при состоянии "ВКЛ" логического поля.',//'This color will be used for the switch\'s "on" state.',
        'option'       => [
            'green'  => 'Зеленый',//'Green',
            'blue'   => 'Синий',//'Blue',
            'orange' => 'Оранжевый',//'Orange',
            'red'    => 'Красный',//'Red',
            'gray'   => 'Серый',//'Gray',
        ],
    ],
    'off_text'      => [
        'label'        => 'Текст в состоянии "ВЫКЛ"',//'"Off" Text',
        'instructions' => 'Текст, который будет использоваться при состоянии "ВЫКЛ" логического поля.',//'This text will be used for the switch\'s "off" state.',
        'placeholder'  => 'НЕТ',//'NO',
    ],
    'off_color'     => [
        'label'        => 'Цвет в состоянии "ВЫКЛ"',//'"Off" Color',
        'instructions' => 'Цвет, который будет использоваться при состоянии "ВЫКЛ" логического поля.',//'This color will be used for the switch\'s "off" state.',
        'option'       => [
            'green'  => 'Зеленый',//'Green',
            'blue'   => 'Синий',//'Blue',
            'orange' => 'Оранжевый',//'Orange',
            'red'    => 'Красный',//'Red',
            'gray'   => 'Серый',//'Gray',
        ],
    ],
    'default_value' => [
        'label'        => 'Начальное состояние',//'Default State',
        'instructions' => 'Состояние по умолчанию, в котором изначально будет находиться логическое поле.',//'What is the default state of the switch?',
        'option'       => [
            'on'  => 'ВКЛ',//'ON',
            'off' => 'ВЫКЛ',//'OFF',
        ],
    ],
];
