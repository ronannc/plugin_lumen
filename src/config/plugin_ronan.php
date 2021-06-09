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

    'CLIENT_KEY' => env( 'CLIENT_CODE', '6ea297bc5e294666f6738e1d48fa63d2' ),

    'CLIENT_CODE' => env( 'CLIENT_KEY', 'FC-SB-15' ),

    'BASE_URI' => env( 'BASE_URI', 'https://api-sandbox.fpay.me/' )
];
