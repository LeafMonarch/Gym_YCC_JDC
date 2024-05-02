<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Exercise;
use App\Models\Coach;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('appointmentBlog.index')
            ->with('appointments', Appointment::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $exercise = Exercise::all();
        // dd($exercise);
        //  return view('appointmentBlog.create');
        return view('appointmentBlog.create')
            ->with('exercises', Exercise::orderBy('updated_at', 'DESC')->get())
            ->with('coaches', Coach::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'exercise_type' => 'required',
            'decided_time' => 'required',
            'coach_name' => 'required'
        ]);
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


