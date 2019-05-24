@extends('layouts.app')

@section('title', 'classes')

@section('content')

{{-- Classes.index placeholder --}}

<p><a href="classes/create">Create a Classe</a></p>

<div class="row">
    <div class="col-4">
        <h3>Ongoing Classes</h3>
        <ul>
            @foreach ($ongoingClasses as $ongoingClasse)
                <li>{{ $ongoingClasse->name }}
                    <span class="text-muted">- {{ $ongoingClasse->major }}</span>
                    <span class="text-muted">({{ $ongoingClasse->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Ended Classes</h3>
        <ul>
            @foreach ($endedClasses as $endedClasse)
                <li>{{ $endedClasse->name }}
                    <span class="text-muted">- {{ $endedClasse->major }}</span>
                    <span class="text-muted">({{ $endedClasse->year}})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-4">
        <h3>Archived Classes</h3>
        <ul>
            @foreach ($archivedClasses as $archivedClasse)
                <li>{{ $archivedClasse->name }}
                    <span class="text-muted">- {{ $archivedClasse->major }}</span>
                    <span class="text-muted">({{ $archivedClasse->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection
