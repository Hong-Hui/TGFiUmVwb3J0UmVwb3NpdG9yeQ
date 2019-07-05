@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">

                    <h4>Users Manual : Register</h4>

                </div>

                <div class="card-body">

                    <p>
                        If your ID, which is issued by your school or university is in the system, then you can proceed by going to <a href="{{ route('register') }}">Register</a>.
                    </p>
                    <p>
                        You can check if your ID is in the system by finding it <a>here</a>, unless you are an <a>Assistant</a>, then note that assistants cannot register their accounts, the teacher or lecturer you are assisting is responsible for creating an account for you.
                    </p>
                    <p>
                        Enter all the credentials required, as leaving any empty field will prevent you from completing the registration.
                    </p>
                    <p>
                        Password : Please note that the password should be at least 8 characters long, ((no spaces)).
                    </p>
                    <p>
                        Whether you are a teacher of a student, your role will be assigned to you automatically, after you register.
                    </p>
                    <p>
                        If you have any more questions not answered here, please <a href="{{ route('contact.create') }}">contact us</a>, and feel free to ask.
                    </p>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection

