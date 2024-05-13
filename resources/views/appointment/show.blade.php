{{-- @extends('layouts.app')

@section('content')

@endsection --}}

<x-app-layout>
    <div class="w-4/5 m-auto text-center ">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl ">
                {{ $appointment->exercise_type }}
            </h1>
        </div>
    </div>


    <div class="w-4/5 m-auto pt-20">
        <span class="text-white">
            Comment By <span class="font-bold italic text-white">{{ $appointment->user->name }}</span>, Created on {{ date('jS M Y', strtotime($appointment->updated_at)) }}
        </span>
        <p class="text-xl text-white pt-8 pb-10 leading-8 font-light">
            {{ $appointment->comment }}
        </p>
    </div>





</div>
</x-app-layout>