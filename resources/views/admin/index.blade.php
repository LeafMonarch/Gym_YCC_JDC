
<x-app-layout>

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
            href="/admin/create"
            class="bg-blue-500 uppercase bg-transparent text-black text-xs font-extrabold py-3 px-5 rounded-3xl">
            Make an User
        </a>
    </div>
@endif

<div class="container mx-auto mt-10">
    <table class="min-w-full divide-y divide-gray-200 bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Number</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Access Level</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Password</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($users as $user)
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->contact_number }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->access_level }}</td>
                <td class="px-6 py-4 whitespace-nowrap max-w-sm truncate">{{ $user->password }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="/admin/{{ $user->slug }}/edit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Edit</a>
                    <form action="/admin/{{ $user->slug }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>