{{-- @extends('layouts.app')

@section('content')

@endsection --}}

<x-app-layout>
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl ">
                Update an Appointment
            </h1>
        </div>
    </div>

    @if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="w-4/5 m-auto pt-20">
        <form 
            action="/appointment/{{ $appointment->slug }}"
            {{-- action="{{ route('appointment.store') }}" --}}
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <select 
            name="exercise_type"
            class="bg-black text-white block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">{{ $appointment->exercise_type }}</option>
            @foreach($exercises as $exercise)
            <option value="{{ $exercise->exercise_type }}">{{ $exercise->exercise_type }}</option>
            @endforeach
            </select>

            <input class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey" type="datetime-local" id="decided_time" name="decided_time" value="{{ $appointment->decided_time }}">

            <textarea 
            name="comment"
            placeholder="Comment..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $appointment->comment }}</textarea>

            <select 
            name="coach_name"
            class="bg-black text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">{{ $appointment->coach_name }}</option>
            @foreach($coaches as $coach)
            <option value="{{ $coach->name }}">{{ $coach->name }}</option>
            @endforeach
            </select>
    
            {{-- We can add this later on --}}
            {{-- <textarea 
                name="comment"
                placeholder="Comment..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea> --}}
    
    
            <button    
                type="submit"
                class="uppercase mt-15 bg-orange-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Update Appointment
            </button>
        </form>
    </div>





</div>
</x-app-layout>