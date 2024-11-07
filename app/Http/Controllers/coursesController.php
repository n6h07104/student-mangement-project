<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show=course::all("name","syllabus","duration");
        return view('courses.index',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       course::create($request->toArray());
       return redirect()->route('course.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=course::findOrfail($id);
        return view("courses.show",compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=course::findOrfail($id);
    return view("courses.edit",compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       course::where('id',$id)->update($request->except("_token","_method"));
       return redirect()->route("course.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        course::findOrfail($id)->delete();
        return redirect()->route('course.index');
    }
}
