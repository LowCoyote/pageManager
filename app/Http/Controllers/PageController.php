<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($route)
    {
        $page = Page::where('route', $route)->firstOrFail();
        return view('page', ['page' => $page]);
    }
}
