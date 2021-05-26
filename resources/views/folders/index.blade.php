@extends('layouts.main')
@section('content')
    <h1>Folders</h1>
    <hr>
    @foreach ($folders as $folder)
        <h3><a href="{{ route('folders.show', $folder->id) }}">{{ $folder->name }}</a></h3>
        <hr>
    @endforeach
@endsection
