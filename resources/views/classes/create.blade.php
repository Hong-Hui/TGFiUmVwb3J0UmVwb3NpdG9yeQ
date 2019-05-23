@extends('layouts.app')

@section('title', 'Add New Classe')

@section('content')

{{-- Classes.create placeholder --}}

<h1>Add New Classe</h1>

    <form action="/classes" method="POST" class="pb_5">

        <div class="input-group">
            <input type="text" name="major">
            <input type="text" name="year">
            <input type="text" name="semester">
            <input type="text" name="number">
            <input type="text" name="status">
        </div>

        <button type="submit">Create Classe</button>

        @csrf
    </form>

    {{-- {{ $errors-first('major') }} --}}

    <ul>
        @foreach ($classes as $classe)
            <li>{{ $classe->major }}</li>
        @endforeach

    </ul>
@endsection
