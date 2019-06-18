@extends('layouts.app')

@section('content')
    <h1>Users Manual : Login</h1>
    <p>
        Before being able to login for all types of users, you will need to have a registered account first.
    </p>
    <a href="{{ route('manual_Register') }}">How to register?</a>
    <p>
        If you have already registered successfully, please head to the <a href="{{ route('login') }}">Login</a> page.
    </p>
    <p>
        Enter your username (Email), and password, and press Login.
    </p>
    <p>
        If you have successfully forgotten your password, please go to the <a>Restore</a> page, and enter the email address linked to your account and press "send password reset link".
    </p>
    <p>
        open the email you submitted, and you will receive a reset link to create a new password for your account.
    </p>
    <p>
        please, make sure you don't forget your passwords or write them on paper or on an unsecure digital file,
        in case you tend to forget your passwords very often. <a href="">check this out</a>.
    </p>
    <p>
        if the email is not registered in the system with your id, or if you lost access to the email you linked to your account.
        then you will have to contact the <a href="{{ route('contact.create') }}">database admin</a>, so your password or email will be changed manually.
    </p>
@endsection
