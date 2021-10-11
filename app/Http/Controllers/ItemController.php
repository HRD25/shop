<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Show view for Item
     *
     * @return View;
     */
    public function index(int $id):View
    {
        return view('item',['id' => $id]);
    }
}
