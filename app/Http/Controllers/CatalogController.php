<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('status', 'DESC')->get();
        return view('pages.catalog.index', compact('items'));
    }
}
