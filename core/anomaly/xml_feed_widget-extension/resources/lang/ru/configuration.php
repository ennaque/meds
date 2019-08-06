<?php

return [
    'url'      => [
        'name'         => 'URL',//'URL',
        'instructions' => 'URL для XML-фида.',//'Specify the URL for the XML feed.',
    ],
    'template' => [
        'name'         => 'Шаблон',//'Template',
        'instructions' => 'Шаблон для вывода XML-фида. {{ widget.data.items }} возвращает массив <a href="https://packagist.org/packages/simplepie/simplepie" target="_blank">SimplePie</a> объектов.',//'Specify the output template for the XML feed. {{ widget.data.items }} returns an array of <a href="https://packagist.org/packages/simplepie/simplepie" target="_blank">SimplePie</a> objects.',
    ],
];
