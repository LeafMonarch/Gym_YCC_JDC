<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function newpage()
    {
        return view('newpage');
    }

    // public function appointment()
    // {
    //     return view('appointment');
    // }
}
