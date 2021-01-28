<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\ExternalServices\MercadoLibreService;

class AuthMercadoLibreController extends Controller
{
    public function showLoginForm()
    {
        $APP_ID = config('mercadolibre.app_id');
        $redirect_url = config('mercadolibre.redirect_url');

        $url = 'https://auth.mercadolibre.com.ar/authorization?response_type=code&client_id=' . $APP_ID . '&' . 'redirect_uri=' . $redirect_url;

        return Redirect::to($url);
    }

    public function checkauth(Request $request)
    {
        session(['mercadolibre_code' => $request->code]);

        $mercadoLibreServie = new MercadoLibreService;

        $hasToken = $mercadoLibreServie->getToken();

        if ($hasToken) {
            return redirect()->route('mercadolibre.home');
        }

        return redirect()->route('welcome');
    }
}
