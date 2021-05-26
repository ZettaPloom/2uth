@extends('layouts.main')
@section('content')
    <h1>Codes</h1>
    <hr>
    @foreach ($codes as $code)
        <h3><a href="{{ route('codes.show', $code->id) }}">{{ $code->label }}: $code->user</a></h3>
        <hr>
    @endforeach
    <a href="{{ route('codes.create', $folder->id) }}">Create a Code</a>
@endsection
