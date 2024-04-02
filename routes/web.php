<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{route}', [PageController::class, 'show']);