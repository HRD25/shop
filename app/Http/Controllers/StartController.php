<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\View\View;
use Illuminate\Http\Request;

class StartController extends Controller
{
    private item $items;

    public function __construct(item $items)
    {
        $this->items = $items;
    }

    /**
     * Show view for Start
     *
     * @return View;
     */
    public function index(): View
    {
        return view('start', ['items' => $this->items->get()]);
    }
}
