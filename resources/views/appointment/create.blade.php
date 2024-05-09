{{-- @extends('layouts.app')

@section('content')

@endsection --}}

<x-app-layout>
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl ">
                Make an Appointment
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
            action="/appointment"
            {{-- action="{{ route('appointment.store') }}" --}}
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <select 
            name="exercise_type"
            class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">Select Exercise</option>
            @foreach($exercises as $exercise)
            <option value="{{ $exercise->exercise_type }}">{{ $exercise->exercise_type }}</option>
            @endforeach
            </select>

            <input class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey" type="datetime-local" id="decided_time" name="decided_time">

            <textarea 
            name="comment"
            placeholder="Comment..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <select 
            name="coach_name"
            class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">Select Coach</option>
            @foreach($coaches as $coach)
            <option value="{{ $coach->name }}">{{ $coach->name }}</option>
            @endforeach
            </select>
    
            {{-- We can add this later on --}}
            {{-- <textarea 
                name="comment"
                placeholder="Comment..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea> --}}
    
    
            <div class="bg-grey-lighter pt-15">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input 
                        type="file"
                        name="image"
                        class="hidden">
                </label>
            </div>

            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Appointment
            </button>
        </form>
    </div>





</div>
</x-app-layout>