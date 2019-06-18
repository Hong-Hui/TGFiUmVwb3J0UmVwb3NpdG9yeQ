@extends('layouts.app')

@section('content')
    <h1>Users Manual : Login</h1>
    <ul>
        <li><a href="{{ route('manual_Login') }}">Login</a></li>
        <li><a href="{{ route('manual_Register') }}">Register</a></li>
        <li><a href="{{ route('manual_Guest_Permissions') }}">Guest Permissions</a></li>
        <li><a href="{{ route('manual_Student_Permissions') }}">Student Permissions</a></li>
        <li><a href="{{ route('manual_Teacher_Permissions') }}">Teacher Permissions</a></li>
    </ul>
@endsection
