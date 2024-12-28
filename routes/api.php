<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Define API routes here
Route::get('/example', function () {
    return response()->json(['message' => 'Hello, World!']);
});
