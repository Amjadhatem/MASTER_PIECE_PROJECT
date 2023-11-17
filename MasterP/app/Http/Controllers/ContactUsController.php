<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $con = ContactUs::orderBy('created_at', 'DESC')->get();
       
        return view('Contact.index' , compact('con'));
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
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|numeric',
            'message' => 'required',
        ]);
    
        $con = ContactUs::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'message' => $data['message'],
        ]);
    
        return redirect(route('successCon.page'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        $con = ContactUs::findOrFail($contactUs);
  
        return view('Contact.show', compact('con'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        $con = ContactUs::findOrFail($contactUs);
  
        return view('Contact.edit', compact('con'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        $con = ContactUs::findOrFail($contactUs);
  
        $con->update($request->all());
  
        return redirect(route('con'))->with('success', 'reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        $con = ContactUs::findOrFail($contactUs);
  
        $con->delete();
  
        return redirect(route('Rese'))->with('success', 'reservation deleted successfully');
    }
}
