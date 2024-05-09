<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    //

    public function index()
    {
        return view('admin.index')
            ->with('users', User::orderBy('updated_at', 'DESC')->get());
    }
}