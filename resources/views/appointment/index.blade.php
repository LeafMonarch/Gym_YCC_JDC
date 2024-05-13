{{-- @extends('layouts.app')

@section('content')

@endsection --}}

<x-app-layout>
    <div class="w-4/5 m-auto text-center bg-black text-white">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl ">
                Gym Appointments
            </h1>
        </div>
    </div>

@if (session()->has('message'))
<div class="w-4/5 m-auto mt-10 pl-2">
    <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
        {{ session()->get('message') }}
    </p>
</div>
@endif


@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/appointment/create"
            class="bg-blue-500 uppercase bg-transparent text-white text-l font-extrabold py-3 px-5 rounded-3xl hover:text-orange-500">
            Make an Appointment
        </a>
    </div>
@endif

@if (Auth::check() && Auth::user()->access_level == 2)
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/admin"
            class="bg-blue-500 uppercase bg-transparent text-white text-l font-extrabold py-3 px-5 rounded-3xl hover:text-orange-500">
            Admin
        </a>
    </div>
@endif

@foreach($appointments as $appointment)
    {{-- {{ $appointment->appointment_id}} --}}
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $appointment->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-white font-bold text-5xl pb-4 text-black">
                {{ $appointment->exercise_type }}
            </h2>

            <span class="text-white">
                Appointment-ID: <span class="font-bold italic text-white">{{ $appointment->appointment_id }}</span>
            </span>
            <br>
            <span class="text-white">
                Attendee: <span class="font-bold italic text-white">{{ $appointment->user->name }}</span>, Created on {{ date('jS M Y', strtotime($appointment->updated_at)) }}
            </span>
            <br>
            <span class="text-white">
                Coach name: <span class="font-bold italic text-white">{{ $appointment->coach_name }}</span>
            </span>
            <br>
            <br>
            <br>
            <br>
            <a href="/appointment/{{ $appointment->slug }}" class="uppercase bg-orange-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl hover:text-orange-500 hover:bg-white">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $appointment->user_id)
                <span class="float-right">
                    <a 
                        href="/appointment/{{ $appointment->slug }}/edit"
                        class="text-white  italic hover:text-gray-400 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/appointment/{{ $appointment->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif




        </div>
    </div>
@endforeach


</div>
</x-app-layout>