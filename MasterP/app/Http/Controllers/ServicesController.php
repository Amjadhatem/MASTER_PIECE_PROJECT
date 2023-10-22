<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Services::orderBy('created_at', 'DESC')->get();
       
        return view('crud.index' , compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Services::create($request->all());

        return redirect(route('services'))->with('success', 'Product added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        $service = Services::findOrFail($id);
  
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        $service = Services::findOrFail($id);
  
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        $service = Services::findOrFail($id);
  
        $service->update($request->all());
  
        return redirect(route('services'))->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        $service = Services::findOrFail($id);
  
        $service->delete();
  
        return redirect(route('services'))->with('success', 'product deleted successfully');
    }
}
