@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

{{-- Contacts.create placeholder --}}

    <h1>Contact Us</h1>

    <form action="{{ route('contact.store') }}" method="POST">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{ old('name') }}">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" class="form-control" value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="messsage" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>

        @csrf
    </form>

@endsection
