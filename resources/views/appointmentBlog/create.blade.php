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

    <div class="w-4/5 m-auto pt-20">
        <form 
            action="/appointmentBlog"
            method="POST"
            enctype="multipart/form-data">
            @csrf
    
            <select 
            name="exercise_type"
            class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">Select Exercise</option>
            <option value="Aerobic">Aerobic</option>
            <option value="Cardio">Cardio</option>
            <option value="Calisthenic">Calisthenic</option>
            <option value="Cycling">Cycling</option>
            <option value="Flexibility">Flexibility</option>
            <option value="Strength training">Strength training</option>
            <option value="Swimming">Swimming</option>
            </select>

            <select 
            name="exercise_type"
            class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">Select Exercise</option>
            @foreach($exercises as $exercise)
            <option value="{{ $exercise->exercise_type }}">{{ $exercise->exercise_type }}</option>
            @endforeach
            </select>

            <input class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey" type="datetime-local" id="decided_time" name="decided_time">

            <select 
            name="coach_name"
            class="bg-transparent text-greyyy block border-b-2 w-full h-20 text-3xl outline-none my-2 hover:bg-greyyy hover:text-grey">
            <option value="">Select Coach</option>
            @foreach($coaches as $coach)
            <option value="{{ $coach->name }}">{{ $coach->name }}</option>
            @endforeach
            </select>
    
            
            <textarea 
                name="comment"
                placeholder="Comment..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
    
    
            <button    
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Appointment
            </button>
        </form>
    </div>





</div>
</x-app-layout>