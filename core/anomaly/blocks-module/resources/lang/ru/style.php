<?php

return [
    'default'                   => [
        'label' => 'По умолчанию',//'Default',
    ],
    'hover'                     => [
        'label' => 'Наведение курсора',//'Hover',
    ],
    'desktop'                   => [
        'label' => 'ПК',//'Desktop',
    ],
    'tablet'                    => [
        'label' => 'Планшет',//'Tablet',
    ],
    'phone'                     => [
        'label' => 'Телефон',//'Phone',
    ],
    'top'                       => [
        'label' => 'Сверху',//'Top',
    ],
    'top_left'                  => [
        'label' => 'Сверху слева',//'Top Left',
    ],
    'top_right'                 => [
        'label' => 'Сверху справа',//'Top Right',
    ],
    'bottom'                    => [
        'label' => 'Внизу',//'Bottom',
    ],
    'bottom_left'               => [
        'label' => 'Внизу слева',//'Bottom Left',
    ],
    'bottom_right'              => [
        'label' => 'Внизу справа',//'Bottom Right',
    ],
    'left'                      => [
        'label' => 'Слева',//'Left',
    ],
    'right'                     => [
        'label' => 'Справа',//'Right',
    ],
    'border_style'              => [
        'label'  => 'Стиль границ',//'Border Style',
        'option' => [
            'none'   => 'Без границ',//'None',
            'hidden' => 'Невидимая линия',//'Hidden',
            'dotted' => 'Точечная линия',//'Dotted',
            'dashed' => 'Пунктирная линия',//'Dashed',
            'solid'  => 'Сплошная линия',//'Solid',
            'double' => 'Двойная линия',//'Double',
            'groove' => 'Вогнутая линия',//'Groove',
            'ridge'  => 'Выпуклая линия',//'Ridge',
            'inset'  => 'Внутренняя граница',//'Inset',
            'outset' => 'Внешняя граница',//'Outset',
        ],
    ],
    'width'                     => [
        'label' => 'Ширина',//'Width',
    ],
    'height'                    => [
        'label' => 'Высота',//'Height',
    ],
    'margin'                    => [
        'label' => 'Внешний отсуп',//'Margin',
    ],
    'top_margin'                => [
        'label' => 'Внешний отсуп сверху',//'Top Margin',
    ],
    'bottom_margin'             => [
        'label' => 'Внешний отсуп снизу',//'Bottom Margin',
    ],
    'left_margin'               => [
        'label' => 'Внешний отсуп слева',//'Left Margin',
    ],
    'right_margin'              => [
        'label' => 'Внешний отсуп справа',//'Right Margin',
    ],
    'padding'                   => [
        'label' => 'Внутренний отступ',//'Padding',
    ],
    'border_width'              => [
        'label' => 'Ширина границы',//'Border Width',
    ],
    'border_radius'             => [
        'label' => 'Радиус скругления границы',//'Border Radius',
    ],
    'border_color'              => [
        'label' => 'Цвет границы',//'Border Color',
    ],
    'css_id'                    => [
        'label' => 'CSS ID',//'CSS ID',
    ],
    'css_class'                 => [
        'label' => 'Класс CSS',//'CSS Class',
    ],
    'custom_css'                => [
        'label' => 'Нестандартный CSS',//'Custom CSS',
    ],
    'custom_js'                 => [
        'label' => 'Нестандартный JS',//'Custom JS',
    ],
    'transition_duration'       => [
        'label' => 'Длительность перехода',//'Transition Duration',
    ],
    'transition_delay'          => [
        'label' => 'Задержка перехода',//'Transition Delay',
    ],
    'transition_speed_curve'    => [
        'label'  => 'Кривая функции скорости перехода',//'Transition Speed Curve',
        'option' => [
            'linear'      => 'Линейная',//'Linear',
            'ease'        => 'Ease',//'Ease',
            'ease-in'     => 'Ease-in',//'Ease-in',
            'ease-out'    => 'Ease-out',//'Ease-out',
            'ease-in-out' => 'Ease-in-out',//'Ease-in-out',
        ],
    ],
    'background_image'          => [
        'label' => 'Фоновое изображение',//'Background Image',
    ],
    'background_color'          => [
        'label' => 'Цвет фона',//'Background Color',
    ],
    'background_size'           => [
        'label'  => 'Масштаб фонового изображения',//'Background Size',
        'option' => [
            'auto'    => 'Не масштабировать',//'None',
            'cover'   => 'Заполнение',//'Cover',
            'contain' => 'По размеру',//'Contain',
        ],
    ],
    'background_position'       => [
        'label'  => 'Положение фонового изображения',//'Background Position',
        'option' => [
            'top_left'      => 'Сверху слева',//'Top Left',
            'top_center'    => 'Сверху по-центру',//'Top Center',
            'top_right'     => 'Сверху справа',//'Top Right',
            'center_left'   => 'По центру слева',//'Center Left',
            'center'        => 'По центру',//'Center',
            'center_right'  => 'По центру справа',//'Center Right',
            'bottom_left'   => 'Снизу слева',//'Bottom Left',
            'bottom_center' => 'Снизу по-центру',//'Bottom Center',
            'bottom_right'  => 'Снизу справа',//'Bottom Right',
        ],
    ],
    'background_repeat'         => [
        'label'  => 'Повторение фонового изображения',//'Background Repeat',
        'option' => [
            'no-repeat' => 'Не повторять',//'No Repeat',
            'repeat'    => 'Повторять по горизонтали и вертикали',//'Repeat',
            'repeat-x'  => 'Повторять по горизонтали',//'Repeat X (horizontal)',
            'repeat-y'  => 'Повторять по вертикали',//'Repeat Y (vertical)',
            'space'     => 'Повторять до заполнения области',//'Space',
            'round'     => 'Повторять до заполнения целым количеством рисунков',//'Round',
        ],
    ],
    'divider'                   => [
        'label'       => 'Разделитель',//'Divider',
        'placeholder' => 'Нет разделителя',//'None',
        'option'      => [
            'arrow'       => 'Стрелка',//'Arrow',
            'arrow2'      => 'Стрелка 2',//'Arrow 2',
            'arrow3'      => 'Стрелка 3',//'Arrow 3',
            'asymmetric'  => 'Ассиметричный',//'Asymmetric',
            'asymmetric2' => 'Ассиметричный 2',//'Asymmetric 2',
            'asymmetric3' => 'Ассиметричный 3',//'Asymmetric 3',
            'asymmetric4' => 'Ассиметричный 4',//'Asymmetric 4',
            'clouds'      => 'Облака',//'Clouds',
            'clouds2'     => 'Облака 2',//'Clouds 2',
            'curve'       => 'Кривая',//'Curve',
            'curve2'      => 'Кривая 2',//'Curve 2',
            'graph'       => 'График',//'Graph',
            'graph2'      => 'График 2',//'Graph 2',
            'graph3'      => 'График 3',//'Graph 3',
            'graph4'      => 'График 4',//'Graph 4',
            'mountains'   => 'Горы',//'Mountains',
            'mountains2'  => 'Горы 2',//'Mountains 2',
            'ramp'        => 'Подъём',//'Ramp',
            'ramp2'       => 'Подъём 2',//'Ramp 2',
            'slant'       => 'Наклонный',//'Slant',
            'slant2'      => 'Наклонный 2',//'Slant 2',
            'triangle'    => 'Треугольник',//'Triangle',
            'wave'        => 'Волна',//'Wave',
            'wave2'       => 'Волна 2',//'Wave 2',
            'waves'       => 'Волны',//'Waves',
            'waves2'      => 'Волны 2',//'Waves 2',
        ],
    ],
    'divider_arrangement'       => [
        'label'  => 'Расположение разделителя',//'Divider Arrangement',
        'option' => [
            'top'    => 'Над содержимым',//'On Top of Section Content',
            'bottom' => 'Под содержимым',//'Underneath Section Content',
        ],
    ],
    'divider_color'             => [
        'label' => 'Цвет разделителя',//'Divider Color',
    ],
    'divider_flip_horizontally' => [
        'label' => 'Поворот разделителя (по горизонтали)',//'Divider Flip (Horizontally)',
    ],
    'disabled'                  => [
        'label'        => 'Видимость',//'Visibility',
        'instructions' => 'Отключить на следующих устройствах:',//'Disable on the following devices:',
        'option'       => [
            'phone'   => 'Телефон',//'Phone',
            'tablet'  => 'Планшет',//'Tablet',
            'desktop' => 'ПК',//'Desktop',
        ],
    ],
];
