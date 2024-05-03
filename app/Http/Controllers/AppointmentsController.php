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
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        // $slug = SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type);
        // dd($slug);

        Appointment::create([
            'exercise_type' => $request->input('exercise_type'),
            'slug' => SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type),
            'decided_time' => $request->input('decided_time'),
            'coach_id' => $request->input('coach_id'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/appointment')->with('message', 'Your Appointment has been set!');
    }

    /**
     * Display the specified resource.
     *  @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *  @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('appointment.edit')
            ->with('appointment', Appointment::where('slug', $slug)->first())
            ->with('exercises', Exercise::orderBy('updated_at', 'DESC')->get())
            ->with('coaches', Coach::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);


        // Find the appointment by slug
        $appointment = Appointment::where('slug', $slug)->first();

        // Check if exercise_type has changed
        if ($appointment->exercise_type !== $request->input('exercise_type')) {
            // Update exercise_type and generate new slug
            $appointment->exercise_type = $request->input('exercise_type');
            $appointment->slug = SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type);
        }

        // Update other fields
        $appointment->decided_time = $request->input('decided_time');
        $appointment->coach_id = $request->input('coach_id');
        $appointment->user_id = auth()->user()->id;

        // Save the changes
        $appointment->save();

        // Appointment::where('slug', $slug)
        //     ->update([
        //         'exercise_type' => $request->input('exercise_type'),
        //         'slug' => SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type),
        //         'decided_time' => $request->input('decided_time'),
        //         'coach_id' => $request->input('coach_id'),
        //         'user_id' => auth()->user()->id
        //     ]);

        return redirect('/appointment')
            ->with('message', 'Your Appointment has been updated & rearranged!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


