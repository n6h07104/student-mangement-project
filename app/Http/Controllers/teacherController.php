<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show=teacher::all("name","address","mobile");
        return view('teacher.index',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        teacher::create($request->toArray());
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=teacher::findOrfail($id);
        return view('teacher.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=teacher::findOrfail($id);
        return view('teacher.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         teacher::where("id",$id)->update($request->except("_token","_method"));
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        teacher::findOrfail($id)->delete();
        return redirect()->route('teacher.index');
    }
}
