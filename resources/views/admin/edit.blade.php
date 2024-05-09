{{-- @extends('layouts.app')

@section('content')

@endsection --}}

<x-app-layout>
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl ">
                Update an User
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
            action="/admin/{{ $user->slug }}"
            {{-- action="{{ route('appointment.store') }}" --}}
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="contact_number" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" value="{{ $user->contact_number }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="access_level" class="block text-gray-700 text-sm font-bold mb-2">Access Level</label>
                <input type="number" id="access_level" name="access_level" value="{{ $user->access_level }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update User</button>

        </form>
    </div>


</div>
</x-app-layout>