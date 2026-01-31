<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//   return "API is working properly";
//})->name('api.home');

Route::middleware('client.auth')->group(function () {

    Route::get('/client-info', function (Request $request) {
        $client = $request->get('authenticated_client');

        return response()->json([
            'id' => $client->id,
            'name' => $client->name,
            'api_token' => $client->api_token,
            'created_at'=> $client->created_at,
            'updated_at'=> $client->updated_at,
        ]);
    })->name('api.client.info');
Route::get('/', function () {
    return "API is working properly.";
})->name('api.home');

});

