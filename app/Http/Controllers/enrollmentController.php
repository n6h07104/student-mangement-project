<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\enrollment;
use App\Models\student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class enrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show=enrollment::all("enroll_on","join_data","fee","student_id","batch_id");
       return  view("enrollment.index",compact("show"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stu=student::pluck("name","id");
        $bat=batch::pluck("name","id");
        return view("enrollment.create",compact("stu"),compact("bat"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        enrollment::create($request->toArray());
        return redirect()->route("enrollment.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=enrollment::findOrfail($id);
        return view("enrollment.show",compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=enrollment::findOrfail($id);
        return view("enrollment.edit",compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        enrollment::where("id",$id)->update($request->except("_token","_method"));
        return redirect()->route("enrollment.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        enrollment::findOrfail($id)->delete();
        return redirect()->route("enrollment.index");
    }
}
