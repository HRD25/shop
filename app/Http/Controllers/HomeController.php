<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private slider $slider;
    private item $item;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(slider $slider,item $item)
    {
        $this->item = $item;
        $this->slider = $slider;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'items' => $this->item->where('name','Computer')->get(),
            'collection' => $this->item->where('name','TV')->get()
        ]);
    }
}
