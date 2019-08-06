<?php

return [
    'rows'          => [
        'label'        => 'Количество строк',//'Input Rows',
        'instructions' => 'Количество видимых строк, отображаемых в текстовом поле до появления прокрутки.',//'Specify the visible number of lines in the text area before scrolling.',
    ],
    'min'           => [
        'label'        => 'Минимальная длина',//'Minimum Length',
        'instructions' => 'Минимальная длина текста, вводимого в текстовое поле.',//'Specify the minimum input length allowed.',
    ],
    'max'           => [
        'label'        => 'Максимальная длина',//'Maximum Length',
        'instructions' => 'Максимальная длина текста, вводимого в текстовое поле.',//'Specify the maximum input length allowed.',
    ],
    'autogrow'      => [
        'label'        => 'Автоматическое растяжение',//'Autogrow',
        'instructions' => 'Автоматическое изменение высоты текстового поля в зависимости от введённого количества строк.',//'Automatically adjust input height while typing?',
        'warning'      => 'Высота текстового поля не может быть меньше указанной в параметре "Количество строк".',//'Height will not shrink past the <strong>Input Rows</strong> specified above.',
    ],
    'show_counter'  => [
        'label'        => 'Отображение счётчика',//'Show Counter',
        'instructions' => 'Отображение количества оставшихся символов во время ввода.',//'Display the remaining characters while typing?',
    ],
    'default_value' => [
        'label'        => 'Значение по умолчанию',//'Default Value',
        'instructions' => 'Значение по умолчанию, которое будет записано в текстовое поле.',//'Specify the default value.',
    ],
];
