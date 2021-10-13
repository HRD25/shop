<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\View\View;
class ItemController extends Controller
{
    private item $item;

    public function __construct(item $item)
    {
        $this->item = $item;
    }

    /**
     * Show view for Item
     *
     * @return View;
     */
    public function index(int $id): View
    {
        return view('item', ['item' => $this->item->where('id', $id)->get()]);
    }
}
