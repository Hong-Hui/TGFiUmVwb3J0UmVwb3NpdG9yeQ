@extends('layouts.card')

@section('card_header')

<h4>Users Manual : Index</h4>

@endsection

@section('card_body')

<ul>
    <li><a href="{{ route('manual_Login') }}">Login</a></li>
    <li><a href="{{ route('manual_Register') }}">Register</a></li>
    <li><a href="{{ route('manual_Guest_Permissions') }}">Guest Permissions</a></li>
    <li><a href="{{ route('manual_Student_Permissions') }}">Student Permissions</a></li>
    <li><a href="{{ route('manual_Teacher_Permissions') }}">Teacher Permissions</a></li>
</ul>

@endsection
