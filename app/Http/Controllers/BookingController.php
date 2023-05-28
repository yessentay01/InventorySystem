<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('pages.booking.index', compact('bookings'));
    }
    public function store(Request $request){
        $booking = Booking::where('item_id', '=', $request->item_id)
            ->where('user_id', '=', $request->user_id)->get();
        if (count($booking) > 0){
            return redirect()->back()->with(['message' => 'You have already booked this book', 'alert' => 'alert-warning']);
        }else{
            Booking::create([
                'item_id'=> $request->item_id,
                'user_id'=> $request->user_id,
            ]);
            return redirect()->back()->with(['message' => 'You have successfully booked a book', 'alert' => 'alert-success']);
        }
    }
    public function destroy($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->back()->with(['message' => 'Booking deleted', 'alert' => 'alert-success']);
    }
}
