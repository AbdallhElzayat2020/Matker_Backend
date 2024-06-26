<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\SendOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function send(SendOrderRequest $request)
    {
        // dd($request->all());
        $formData = new Order;
        $formData->name = $request->name;
        $formData->number = $request->number;
        $formData->address = $request->address;
        $formData->offer = $request->offer;
        $formData->save();
        return redirect()->back()->with('success', 'تم تقديم النموذج بنجاح!');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
