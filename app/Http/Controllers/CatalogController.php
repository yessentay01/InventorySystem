<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favorites;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index()
    {
        $items = Item::join('categories', 'categories.id', '=', 'items.category_id')
            ->where('items.status', '=', 1)
            ->select('items.id as id', 'items.name as name', 'items.price as price','categories.name as category', 'items.image as image' , 'items.quantity as quantity', 'items.pdf as pdf')
            ->orderBy('status', 'DESC')
            ->get();
        $favorites = Favorites::all();
        return view('pages.catalog.index', compact('items', 'favorites'));
    }

    public function addToFavorites($id){
        $items = Favorites::where('item_id', '=', $id)->where('user_id', '=', auth()->user()->id)->get();
        if(count($items) > 0){
            foreach ($items as $item){
                DB::table('favorites')->delete($item->id);
            }
            return redirect()->back()->with(['message' => 'Book successfully removed from favorites!', 'alert' => 'alert-success']);;

        }else{
            Favorites::create([
                'user_id' => auth()->user()->id,
                'item_id' => $id,
            ]);
            return redirect()->back()->with(['message' => 'Book added to favorites successfully!', 'alert' => 'alert-success']);;
        }
    }

    public function favorites(){
        $favorites = Favorites::all();
        $items = DB::table('items')
            ->join('favorites', 'items.id', '=', 'favorites.item_id')
            ->join('categories', 'categories.id', '=', 'items.category_id')
            ->where('favorites.user_id' , '=', auth()->user()->id)
            ->where('items.status', '=', 1)
            ->select('items.id as id', 'items.name as name', 'items.price as price','categories.name as category', 'items.image as image', 'items.quantity as quantity', 'items.pdf as pdf')
            ->get();
        return view('pages.favorites.index', compact('items', 'favorites'));
    }

    public function detail($id){
        $item = Item::find((int)$id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('pages.details.index', compact('item', 'categories', 'suppliers'));
    }

}
