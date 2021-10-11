<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Show view for Favorite
     *
     * @return View;
     */
    public function index():View
    {
        return view('favorite');
    }
}
