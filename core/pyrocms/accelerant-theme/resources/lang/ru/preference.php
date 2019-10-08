<?php

return [
    'sidebar_hover' => [
        'name'         => 'Наведение на боковую панель',//'Sidebar Hover',
        'instructions' => 'Показывать боковую панель при навведении курсора?',//'Expand the sidebar on hover?',
    ],
    'navigation'    => [
        'name'         => 'Навигация',//'Navigation',
        'instructions' => '<em>Персональный</em> порядок элементов в панели навигации.',//'Specify your <em>personal</em> order of navigation.',
        'warning'      => 'Первый доступный элемент панели навигации используется в качестве кнопки <strong>домой</strong>.',//'The first accessible navigation item is used as your <strong>home</strong> area.',
        'reorder'      => 'Перетащите основные элементы навигации на <strong>боковую панель</ strong>, чтобы изменить их порядок.',//'Drag and drop the primary navigation items in the <strong>sidebar</strong> to reorder them.',
    ],
    'display'       => [
        'name'         => 'Плотность отображения',//'Display Density',
        'instructions' => 'Компактное отображение позволит показать больше контента на экране.',//'Compact display allows more content to be shown on the screen at once.',
        'option'       => [
            'default' => 'Обычная',//'Default',
            'compact' => 'Компактная',//'Compact',
        ],
    ],
    'sidebars'      => [
        'name'         => 'Отображение боковой панели',//'Sidebar Mode',
        'instructions' => 'При статическом отображении боковая панель всегда будет видима.',//'Static sidebars will always be visible.',
        'option'       => [
            'default' => 'По умолчанию',//'Default',
            'static'  => 'Статическое отображение',//'Static',
        ],
    ],
];
