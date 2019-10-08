<?php

return [
    'mode'        => [
        'label'        => 'Тип ввода',//'Input Mode',
        'instructions' => 'Тип ввода даты и времени.',//'Do you want to display inputs for date, time, or both?',
        'datetime'     => 'Дата и время',//'Date + Time',
        'date'         => 'Только дата',//'Date',
        'time'         => 'Только время',//'Time',
    ],
    'picker'      => [
        'label'        => 'Календарь',//'Date Picker',
        'instructions' => 'Отображение виджета календаря, в котором можно выбрать дату и время.',//'Would you like to display a date/time picker?',
        'warning'      => 'Если календарь не используется, то ввод будет осуществляться через стандартную маскированную строку.',//'If disabled a basic masked input will be displayed.',
    ],
    'date_format' => [
        'label'        => 'Формат даты',//'Date Format',
        'instructions' => 'Формат, используемый при вводе даты.',//'Select the format for the date input.',
    ],
    'time_format' => [
        'label'        => 'Формат времени',//'Time Format',
        'instructions' => 'Формат, используемый при вводе времени.',//'Select the format for the time input.',
    ],
    'timezone'    => [
        'label'        => 'Часовой пояс',//'Timezone',
        'instructions' => 'Часовой пояс, соответствующий введённым дате и времени.',//'Select the timezone for the input.',
        'placeholder'  => 'Часовой пояс по умолчанию',//'Default Timezone',
    ],
    'step'        => [
        'label'        => 'Интервал',//'Minute Step',
        'instructions' => 'Интервал в минутах, используемый для ввода времени.',//'Select the minute interval for time input.',
    ],
];
