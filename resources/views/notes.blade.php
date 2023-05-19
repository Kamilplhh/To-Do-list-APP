@extends('layouts.master')
@vite('resources/css/notes.css')

@section('content')
<div class="list">
    <div class="row">
    @foreach($notes as $note)
        <div class="col-sm-12 col-md-4">
        <a href="/deletenote/{{ $note->id }}"><i class="fa-regular fa-x"></i></a>
            <div class="object">
                {{ $note->description }}
            </div>
        </div>
    @endforeach
    </div>
</div>

@stop