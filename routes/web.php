<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{route}', function ($route) {
    $page = Page::where('route', $route)->firstOrFail();
    return view('page', ['page' => $page]);
});
