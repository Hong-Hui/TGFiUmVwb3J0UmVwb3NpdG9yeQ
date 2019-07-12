@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <h2>Version</h2>
    </div>
</div>

<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">

                    <div class="row">
                        <div class="col-8">
                            <h4>Next Improvements</h4>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            Using Vue Js for a better front end.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            Adding the option of downloading the database.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            Adding a better possibility of database recovery.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            {{-- Adding a profile display with the possibility of customization. --}}
                        </div>
                    </div>

                    {{-- Some Improvments concern only developers and will only confuse the end user,
                    therefore i commented them out so only people who can see the code will see those: --}}

                    {{-- Putting this file in the database to make it dynamic, because dynamic is good  --}}

                </div>

            </div>
        </div>
    </div>
</div>

<hr>

<a href="https://github.com/Hong-Hui/TGFiUmVwb3J0UmVwb3NpdG9yeQ">Github Repository</a>

@endsection

