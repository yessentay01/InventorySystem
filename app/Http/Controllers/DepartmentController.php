<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $departments = Department::orderBy('location', 'ASC')->get();
        return view('pages.department.index', compact('departments'));
    }

    public function showAdd()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        return view('pages.department.add');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        Department::create([
            'name' => $request->name,
            'location' => $request->location
        ]);

        return redirect()->route('department')->with(['message' => 'Department added', 'alert' => 'alert-success']);
    }

    public function destroy($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $department = Department::find($id)->delete();

        return redirect()->route('department')->with(['message' => 'Department deleted', 'alert' => 'alert-danger']);
    }

    public function showEdit($id)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $department = Department::find($id);

        return view('pages.department.edit', compact('department'));
    }

    public function update($id, Request $request)
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $department = Department::find($id);

        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        $department->name = $request->name;
        $department->location = $request->location;
        $department->save();

        return redirect()->route('department')->with(['message' => 'Department updated', 'alert' => 'alert-success']);
    }
}
