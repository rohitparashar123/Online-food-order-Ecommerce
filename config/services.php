<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
         'client_id' => '815781179222-njhegor0a0k3hp2qrhg1ck0st5m48i1o.apps.googleusercontent.com',
        'client_secret' => 'RzsbebK82sEiFn-d8FLIc5Ui',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
    'client_id' => '949062635848281',
    'client_secret' => 'da77db2383e4e587f38d5376781799d3',
    'redirect' => 'http://localhost:8000/callback/facebook',
  ],

   'paytm-wallet' => [
        'env' => env('PAYTM_ENVIRONMENT'), // values : (local | production)
        'merchant_id' => env('PAYTM_MERCHANT_ID'),
        'merchant_key' => env('PAYTM_MERCHANT_KEY'),
        'merchant_website' => env('PAYTM_MERCHANT_WEBSITE'),
        'channel' => env('PAYTM_CHANNEL'),
        'industry_type' => env('PAYTM_INDUSTRY_TYPE'),
    ],
];
