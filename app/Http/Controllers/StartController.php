<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class StartController extends Controller
{
    /**
     * Show view for Start
     *
     * @return View;
     */
    public function index():View
    {
        return view('start');
    }
}
