<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $items = Item::orderBy('status', 'DESC')->get();
        return view('pages.item.index', compact('items'));
    }

    public function showAdd()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('pages.item.add', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $request->validate([
            'name' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
        ]);
        //dd($request);
        Item::create([
            'name' => $request->name,
            'serial_number' => $request->serial_number,
            'status' => $request->status,
            'description' => $request->description,
            'author' => $request->author,
            'price' => $request->price,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id
        ]);

        return redirect()->route('item')->with(['message' => 'Book added', 'alert' => 'alert-success']);
    }

    public function destroy($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('item')->with(['message' => 'Item deleted', 'alert' => 'alert-success']);
    }

    public function showEdit($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $item = Item::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('pages.item.edit', compact('item', 'categories', 'suppliers'));
    }

    public function update($id, Request $request)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $item = Item::find($id);

        $request->validate([
            'name' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
        ]);

        $item->name = $request->name;
        $item->serial_number = $request->serial_number;
        $item->status = $request->status;
        $item->category_id = $request->category_id;
        $item->supplier_id = $request->supplier_id;
        $item->save();

        return redirect()->route('item')->with(['message' => 'Item updated', 'alert' => 'alert-warning']);
    }
}
