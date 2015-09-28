<?php
return [

    [
        'name' => 'page::home',
        'path' => '/',
        'middleware' => \EY\App\Action\Home::class,
        'allowed_methods' => ['GET'],
    ],

];
