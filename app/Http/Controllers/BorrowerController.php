<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use App\Models\Department;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class BorrowerController extends Controller
{
    public function index()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $borrowers = Borrower::orderBy('status', 'DESC')->get();
        $users = User::all();
        return view('pages.borrower.index', compact('borrowers', 'users'));
    }

    public function reports(){
        $borrowers = Borrower::orderBy('status', 'DESC')->get();
        $pdf = PDF::loadView('pages.borrower.report', compact('borrowers'),);
        return $pdf->stream('Report');
    }

    public function showAdd()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $users = User::all();
        $departments = Department::all();
        $items = Item::where('status', 1)->where('quantity', '>', 0)->get();
        return view('pages.borrower.add', compact('departments', 'items', 'users'));
    }

    public function store(Request $request)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $request->validate([
            'name' => 'required',
            'student_id' => 'required',
            'item_id' => 'required',
            'department_id' => 'required',
            'user_id' => 'required',
        ]);

//        $this->changeItemStatus($request->item_id);
      //  dd($request);



        Borrower::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'item_id' => $request->item_id,
            'department_id' => $request->department_id,
            'user_id' => $request->user_id,
            'status' => 1,
        ]);

        $book = Item::find($request->item_id);
        $book->quantity = $book->quantity - 1;
        $book->save();
        return redirect()->route('borrower')->with(['message' => 'Borrower added', 'alert' => 'alert-success']);
    }

    public function destroy($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $borrower = Borrower::find($id)->delete();

        return redirect()->route('borrower')->with(['message' => 'Borrower deleted', 'alert' => 'alert-danger']);
    }

    public function showEdit($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $users = User::all();
        $borrower = Borrower::find($id);
        $departments = Department::all();
        $items = Item::where('status', 1)->get();

        return view('pages.borrower.edit', compact('borrower', 'departments', 'items', 'users'));
    }

    public function update($id, Request $request)
    {
        $borrower = Borrower::find($id);

        $book = Item::find($borrower->item_id);

        if ($request->status == 0 && $borrower->status == 1){
            $book->quantity = $book->quantity + 1;
        }else if ($request->status == 1 && $borrower->status == 0){
            $book->quantity = $book->quantity - 1;
        }
        $book->save();


        $borrower->department_id = $request->department_id;
        $borrower->status = $request->status;
        $borrower->student_id = $request->student_id;


        $borrower->save();
        return redirect()->route('borrower')->with(['message' => 'Borrower updated', 'alert' => 'alert-success']);
    }

    public function changeItemStatus($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $item = Item::find($id);
        $item->save();
    }
}
