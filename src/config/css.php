<?php
$production = app()->environment() == 'production';
return [
    //css добавленный как \LaraCss::addInline('.label{color:red}');
    'inline'   => [
        //собирать в билд (true|false)
        'build' => env('larastatic.css.inline.build', $production),
        //минимизировать (true|false)
        'min'   => env('larastatic.css.inline.min', $production),
    ],
    //css добавленный как \LaraCss::add('http://site.ru/!/static/css/styles.css');
    'external' => [
        //собирать в билд (true|false)
        'build' => env('larastatic.css.external.build', $production),
        //минимизировать (true|false)
        'min'   => env('larastatic.css.min.build', $production),
    ],
];