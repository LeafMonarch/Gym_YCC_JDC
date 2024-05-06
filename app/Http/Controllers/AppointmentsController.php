<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Exercise;
use App\Models\Coach;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AppointmentsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['dashboard', 'show']]);
    // }

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
            'comment' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'coach_name' => 'required'
        ]);

        $newImageName = uniqid() . '-' . $request->exercise_type . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Appointment::create([
            'exercise_type' => $request->input('exercise_type'),
            'slug' => SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type),
            'decided_time' => $request->input('decided_time'),
            'comment' => $request->input('comment'),
            'coach_name' => $request->input('coach_name'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/appointment')->with('message', 'Your Appointment has been set!');
    }

    /**
     * Display the specified resource.
     *  @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
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
        //     'exercise_type' => 'required',
        //     'decided_time' => 'required',
        //     'comment' => 'required',
        //     'coach_name' => 'required',
        // ]);

        // dd($request->all());
        // // Find the appointment by slug
        $appointment = Appointment::where('slug', $slug)->first();

        // // Check if exercise_type has changed
        // if ($appointment->exercise_type !== $request->input('exercise_type')) {
        //     // Update exercise_type and generate new slug
        //     $appointment->exercise_type = $request->input('exercise_type');
        //     $appointment->slug = SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type);
        // }

        if (!$request->has('exercise_type') || !$request->input('exercise_type')) {
            // Handle the case where exercise_type is null or empty
            // For example, you can return a response indicating that exercise_type is required
            return redirect()->back()->withErrors(['exercise_type' => 'Exercise type is required']);
        }
    
        // Check if exercise_type has changed
        if ($appointment->exercise_type !== $request->input('exercise_type')) {
            // Update exercise_type and generate new slug
            $appointment->exercise_type = $request->input('exercise_type');
            $appointment->slug = SlugService::createSlug(Appointment::class, 'slug', $request->input('exercise_type'));
        }

        // // Update other fields
        $appointment->decided_time = $request->input('decided_time');
        $appointment->comment = $request->input('comment');
        $appointment->coach_name = $request->input('coach_name');
        $appointment->user_id = auth()->user()->id;

        // // Save the changes
        $appointment->save();

        // Appointment::where('slug', $slug)
        //     ->update([
        //         'exercise_type' => $request->input('exercise_type'),
        //         'slug' => SlugService::createSlug(Appointment::class, 'slug', $request->exercise_type),
        //         'decided_time' => $request->input('decided_time'),
        //         'comment' => $request->input('comment'),
        //         'coach_name' => $request->input('coach_name'),
        //         'user_id' => auth()->user()->id
        //     ]);

        return redirect('/appointment')
            ->with('message', 'Your Appointment has been updated & rearranged!');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $appointment = Appointment::where('slug', $slug);
        $appointment->delete();

        return redirect('/appointment')
            ->with('message', 'Your Appointment has been deleted!');
    }
}


