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
        $service = Services::orderBy('created_at', 'DESC')->get();
        $Blog = Blogs::orderBy('created_at', 'DESC')->get();
        $barber = Barbers::orderBy('created_at', 'DESC')->get();

        return view('user.welcome', compact('service', 'Blog' , 'barber'));

    }
    public function displayho()
    {
        $service = Services::orderBy('created_at', 'DESC')->get();
        $Blog = Blogs::orderBy('created_at', 'DESC')->get();
        $barber = Barbers::orderBy('created_at', 'DESC')->get();

        return view('user/homepage', compact('service', 'Blog' , 'barber'));
    }

    
}
