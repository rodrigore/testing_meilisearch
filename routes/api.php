<?php

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/search', function (Request $request) {
    return response()->json([
        'data' => Ad::search($request->q)->get()
    ]);
});
