<?php

namespace App\ExternalServices;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MercadoLibreService
{
    public function getToken()
    {
        $client_id = config('mercadolibre.app_id');

        $data = [
            'grant_type' => 'authorization_code',
            'client_id' => $client_id,
            'client_secret' => config('mercadolibre.client_secret'),
            'code' => request()->session()->get('mercadolibre_code'),
            'redirect_uri' => 'https://8e9a6725b901.ngrok.io/checkauth/'
        ];

        $headers = [
            'Authorization' => 'Bearer '. $client_id . '-12345678-031820-X-12345678',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json'
        ];

        $response = Http::withHeaders($headers)->post('https://api.mercadolibre.com/oauth/token', $data)->json();

        session(['mercadolibre_access_token' => $response['access_token']]);

        return request()->session()->has('mercadolibre_access_token');
    }
}
