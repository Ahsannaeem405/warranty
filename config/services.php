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
        'scheme' => 'https',
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
        'client_id' => '673464880587-96tc8ojqcfnq1g7ifu13kptrntn78u0u.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://warrantybti.herokuapp.com/public/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '713176886555710',
        'client_secret' => '9cdd0ae35246786d02a85e63f0de56f5',
        'redirect' => 'http://warrantybti.herokuapp.com/public/auth/facebook/callback',
    ],



];
