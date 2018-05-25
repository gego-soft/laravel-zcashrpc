<?php

return [
    /*
    |--------------------------------------------------------------------------
    | zcashd JSON-RPC Scheme
    |--------------------------------------------------------------------------
    | URI scheme of Zcash Core's JSON-RPC server.
    |
    | Use https to enable SSL connections with Core,
    | but this is strongly discouraged by developers.
    |
    */

    'scheme' => env('ZCASHD_SCHEME', 'http'),

    /*
    |--------------------------------------------------------------------------
    | zcashd JSON-RPC Host
    |--------------------------------------------------------------------------
    | Tells service provider which hostname or IP address
    | Zcash Core is running at.
    |
    | If Zcash Core is running on the same PC as
    | laravel project use localhost or 127.0.0.1.
    |
    | If you're running Zcash Core on the different PC,
    | you may also need to add rpcallowip=<server-ip-here> to your zcash.conf
    | file to allow connections from your laravel client.
    |
    */

    'host' => env('ZCASHD_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | zcashd JSON-RPC Port
    |--------------------------------------------------------------------------
    | The port at which Zcash Core is listening for JSON-RPC connections.
    | Default is 8332 for mainnet and 18332 for testnet.
    | You can also directly specify port by adding rpcport=<port>
    | to zcash.conf file.
    |
    */

    'port' => env('ZCASHD_PORT', 9332),

    /*
    |--------------------------------------------------------------------------
    | zcashd JSON-RPC User
    |--------------------------------------------------------------------------
    | Username needs to be set exactly as in zcash.conf file
    | rpcuser=<username>.
    |
    */

    'user' => env('ZCASHD_USER', ''),

    /*
    |--------------------------------------------------------------------------
    | zcashd JSON-RPC Password
    |--------------------------------------------------------------------------
    | Password needs to be set exactly as in zcash.conf file
    | rpcpassword=<password>.
    |
    */

    'password' => env('ZCASHD_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | zcashd JSON-RPC Server CA
    |--------------------------------------------------------------------------
    | If you're using SSL (https) to connect to your Zcash Core
    | you can specify custom ca package to verify against.
    | Note that using Zcash JSON-RPC over SSL is strongly discouraged.
    |
    */

    'ca' => null,
];
