@extends('layouts.main')
@section('content')
    <h2>Create a code</h2>
    <form action="{{ route('folders.store') }}" method="post">
        @csrf
        <div>
            <labe for="name">Folder name</labe>
            <input type="text" name="name" placeholder="Please enter a name" required>
            <input type="hidden" name="user_id" value="{{ $user_id }}" required>
        </div>
        <input type="submit" value="Create">
    </form>
@endsection
