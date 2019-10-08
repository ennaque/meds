<?php

return [
    'type'          => [
        'label'        => 'Тип ввода',//'Input Type',
        'instructions' => 'Тип вводимого текста, влияющий на внешний вид и поведение поля.',//'Specify the input type to display.',
        'option'       => [
            'password' => 'Пароль',//'Password',
            'tel'      => 'Номер телефона',//'Telephone',
            'email'    => 'Электронная почта',//'Email',
            'text'     => 'Простой текст',//'Text',
        ],
    ],
    'mask'          => [
        'label'        => 'Маска',//'Input Mask',
        'instructions' => '<a href="https://github.com/RobinHerbots/Inputmask" target="_blank">Маска ввода</a>, позволяющая задать ограничения для вводимого текста.',//'Specify an <a href="https://github.com/RobinHerbots/Inputmask" target="_blank">input mask</a>.',
        'placeholder'  => '(999) 999-9999',//'(999) 999-9999',
    ],
    'min'           => [
        'label'        => 'Минимальная длина',//'Minimum Length',
        'instructions' => 'Минимальная длина текста, вводимого в поле.',//'Specify the minimum input length allowed.',
    ],
    'max'           => [
        'label'        => 'Максимальная длина',//'Maximum Length',
        'instructions' => 'Максимальная длина текста, вводимого в поле.',//'Specify the maximum input length allowed.',
    ],
    'show_counter'  => [
        'label'        => 'Отображение счётчика',//'Show Counter',
        'instructions' => 'Отображение количества оставшихся символов во время ввода.',//'Display the remaining characters while typing?',
    ],
    'default_value' => [
        'label'        => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Текст, который будет задан в поле по умолчанию.',//'Specify the default value.',
    ],
];
