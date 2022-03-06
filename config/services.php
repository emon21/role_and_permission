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

    // 'github' => [
    //     'client_id' => '1827d239d2668360a715',
    //     'client_secret' => 'cc589ccce6a31ee13b3594fee8f03ce91fca8f59',
    //     'redirect' => 'http://localhost:8000/login/github/callback',
    // ],

    'facebook' => [
        'client_id' => '236849611900657',
        'client_secret' => '8173c99d05744a4401fb4d649fcf666a',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '89945762765-p3ksqidetqnn08h9jjtejj6lgmhm5md7.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => '19735cb98b049b27262a',
        'client_secret' => '855c40b3550d55064f52db9818a75789642e4f3d',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

    'linkedin' => [
        'client_id' => '86qa300ty26gsi',
        'client_secret' => 'gEA5Bvzedrne6vKe',
        'redirect' => 'http://localhost:8000/login/linkdin/callback',
    ],

];
