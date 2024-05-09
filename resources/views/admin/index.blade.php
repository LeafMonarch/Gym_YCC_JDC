test

@foreach($users as $user)
    <div>{{ $user -> name }}</div>
    <div>{{ $user -> email }}</div>
    <div>{{ $user -> contact_number }}</div>
    <div>{{ $user -> access_level }}</div>

@endforeach