<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Blogs;
use App\Models\Barbers;
use Illuminate\Http\Request;

class Displaydata extends Controller
{
    public function displayda()
    {

        // Fetch services, blogs, and barbers, ordered by creation date in descending order

        $service = Services::orderBy('created_at', 'DESC')->get();
        $Blog = Blogs::orderBy('created_at', 'DESC')->get();
        $barber = Barbers::orderBy('created_at', 'DESC')->get();

        // Pass the fetched data to the 'user.welcome' view

        return view('user.welcome', compact('service', 'Blog' , 'barber'));

    }
    public function displayho()
    {

         // Fetch services, blogs, and barbers, ordered by creation date in descending order

        $service = Services::orderBy('created_at', 'DESC')->get();
        $Blog = Blogs::orderBy('created_at', 'DESC')->get();
        $barber = Barbers::orderBy('created_at', 'DESC')->get();

         // Pass the fetched data to the 'user/homepage' view
         
        return view('user/homepage', compact('service', 'Blog' , 'barber'));
    }

    
}
