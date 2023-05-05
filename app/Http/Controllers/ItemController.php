<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function report(){
        $items = Item::orderBy('status', 'DESC')->get();
        $pdf = PDF::loadView('pages.item.report', compact('items'),);
        return $pdf->stream('Report');
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
        if ($request->image) {
            $photo_name = time() . "." . $request->image->getClientOriginalExtension();
            $request->image->storeAs('media/books/', $photo_name, 'public');
        }

        Item::create([
            'name' => $request->name,
            'serial_number' => $request->serial_number,
            'status' => $request->status,
            'description' => $request->description,
            'author' => $request->author,
            'price' => $request->price,
            'image' => $photo_name,
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

        return redirect()->route('item')->with(['message' => 'Book deleted', 'alert' => 'alert-success']);
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

        return redirect()->route('item')->with(['message' => 'Book updated', 'alert' => 'alert-warning']);
    }
}
