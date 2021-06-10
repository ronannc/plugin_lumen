<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default configuration
    |--------------------------------------------------------------------------
    |
    | Aqui voce configura as variaveis de autenticação para acessa na api.
    |
    */

    'CLIENT_KEY' => env( 'CLIENT_CODE' ),

    'CLIENT_CODE' => env( 'CLIENT_KEY' ),

    'BASE_URI' => env( 'BASE_URI' )
];
