<?php

return [
    'app_id' => env('APP_ID'),
    'redirect_url' => env('ML_URL', "https://8e9a6725b901.ngrok.io/checkauth/"),
    'client_secret' => env('CLIENT_SECRET_ML', '')
];
