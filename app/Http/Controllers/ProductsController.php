<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    public function productList()
    {
        $client_id = config('mercadolibre.app_id');

        $category = 'MLA1644';

        $headers = [
            'Authorization' => 'Bearer '. $client_id . '-12345678-031820-X-12345678'
        ];

        $response = Http::withHeaders($headers)->get('https://api.mercadolibre.com/sites/MLA/search?search_type=scan&orders=price_desc&category=' . $category)->json();
        
        $products = collect($response['results'])->map(function($item, $key) {
            return [
                'id' => $item['id'],
                'title' => $item['title'],
                'price' => $item['price'],
                'sold_quantity' => $item['sold_quantity']
            ];
        })->take(10)->sortBy([['price', 'desc']]);

        $totalPrice = collect($products)->reduce(function ($carry, $item) {
            return $carry + $item['price'];
        });

        $totalSoldQuantity = collect($products)->reduce(function ($carry, $item) {
            return $carry + $item['sold_quantity'];
        });

        return view('productList', compact('products', 'totalPrice', 'totalSoldQuantity'));
    }
}
