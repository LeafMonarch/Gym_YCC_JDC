<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Exercise;
use App\Models\Coach;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('appointmentBlog.index')
        return view('appointment.index')
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

        // $coach = Coach::all();
        // dd($coach);
        // return view('appointmentBlog.create')
        return view('appointment.create')
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
            'coach_id' => 'required'
        ]);

        Appointment::create([
            'exercise_type' => $request->input('exercise_type'),
            'decided_time' => $request->input('decided_time'),
            'coach_id' => $request->input('coach_id'),
            'user_id' => auth()->user()->id
        ]);

        // return redirect('/appointmentBlog')->with('message', 'Your Appointment has been set!');
        return redirect('/appointment')->with('message', 'Your Appointment has been set!');
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
    public function edit($slug)
    {
        return view('appointment.edit')
            ->with('appointment', Appointment::where('slug', $slug)->first());
            
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


