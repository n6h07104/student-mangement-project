<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\course;
use Illuminate\Http\Request;

class batchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show=batch::all("name","course_id","start_data");
        return view("batches.index",compact("show"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $course=course::pluck("name","id");
        return view('batches.create',compact("course"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        batch::create($request->toArray());
        return redirect()->route('batch.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $data=batch::findOrfail($id);
       return view('batches.show',compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=batch::findOrfail($id);
        return view('batches.edit',compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       batch::where('id',$id)->update($request->except("_token","_method"));
       return redirect()->route("batch.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        batch::findOrfail($id)->delete();
        return redirect()->route("batch.index");
    }
}
