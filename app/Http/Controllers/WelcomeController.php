<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function feedback(Request $request){
        Feedback::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'message' => $request->message,
        ]);
        return redirect()->back()->with('alert', 'Thanks for the feedback!');
    }
}
