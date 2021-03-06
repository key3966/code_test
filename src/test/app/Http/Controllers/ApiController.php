<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    // Todo: Fix this function. Return appropriate values and Order Items by ID from Smallest to Largest
    public function testApi1()
    {
        $response = Http::get('https://qiita.com/api/v2/items?page=1&per_page=30');
        $headers = $response->getHeaders();
        $items = $response->body();
        return view('api.first',['headers' => $headers, 'items' => $items]);
    }

    // Todo: Fix this function. Return First 50 Results for the Query: javascript. Order the results by Like Count from Greatest to Least
    public function testApi2()
    {
        $url = 'https://qiita.com/api/v2/items';
        $parameters = [
            'page' => 3;
            'per_page' => 10;
            'query' => 'algissiau';
        ];
        $response = Http::get($url, $parameters);

        $items = $response->body();

        foreach ($items as $item) {

        }

        return view('api.second',['items' => $items]);
    }
}
