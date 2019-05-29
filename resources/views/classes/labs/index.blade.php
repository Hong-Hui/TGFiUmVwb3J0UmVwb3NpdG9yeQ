@extends('layouts.app')

@section('title', 'labs')

@section('content')

{{-- classes.labs.index placeholder --}}


<div class="row">
    <div class="col-12">
        {{-- <h1>Labs List for {{ $labs->classe }}</h1> --}}
        <p><a href="labs/create">Create New Lab</a></p>
    </div>
</div>

<h1>Labs of : {{ $localClasse->findOrFail()->name }}
    <span class="text-muted">{{ $localClasse->firstOrFail()->year }}</span>
</h1>

<div class="row">
    <div class="col-2">
        <b>ID</b>
    </div>
    <div class="col-4">
        Title
    </div>
    <div class="col-4">
        Classe
    </div>
    <div class="col-2">
        Deadline
    </div>
</div>

<hr>

@foreach ($localLabs as $localLab)
    <div class="row">
        <div class="col-2">
            <a href="/classes/{{ $localLab->id }}">{{ $localLab->id }}</a>
        </div>
        <div class="col-4">
            {{ $localLab->title }}
        </div>
        <div class="col-4">
            {{ $localLab->classe->name }}
        </div>
        <div class="col-2">
            {{ $localLab->deadline }}
        </div>
    </div>
@endforeach

@endsection

