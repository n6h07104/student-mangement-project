<?php

namespace App\Http\Controllers;

use App\Models\enrollment;
use App\Models\payment;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show=payment::all("enrollment_id","paid_date","amount");
        return view("payments.index",compact("show"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $en=enrollment::pluck("enroll_on","id");
        return view("payments.create",compact("en"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       payment::create($request->toArray());
       return redirect()->route("payment.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=payment::findOrfail($id);
        return view("payments.show",compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $en=enrollment::pluck("enroll_on","id");
        $data=payment::findOrfail($id);
        return view("payments.edit",compact("data"),compact("en"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        payment::where("id",$id)->update($request->except("_token","_method"));
        return redirect()->route("payment.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        payment::findOrfail($id)->delete();
        return redirect()->route("payment.index");
    }
}
