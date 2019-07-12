@extends('layouts.card')

@section('card_header')

<h4>Guest Permissions</h4>

@endsection

@section('card_body')

<ul>
    @foreach ($permissions as $permission)
        <li>{{ $permission->name }}</li>
    @endforeach
</ul>

@endsection
