@extends('layouts.card')

@section('card_header')

<h4>Contact Form</h4>

@endsection

@section('card_body')

<form action="{{ route('contact.store') }}" method="POST">

    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

        <div class="col-md-8">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
            <div>{{ $errors->first('name') }}</div>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

        <div class="col-md-8">
            <input id="email" type="text" class="form-control" name="email"
                value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
        </div>
    </div>

    <div class="form-group row">
        <label for="message" class="col-md-2 col-form-label text-md-right">Message</label>

        <div class="col-md-8">
            <textarea name="messsage" id="message" cols="30" rows="10"
                class="form-control">{{ old('message') }}</textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </div>

    @csrf
</form>

@endsection
