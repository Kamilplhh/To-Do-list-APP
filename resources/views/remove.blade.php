@extends('layouts.master')
@vite('resources/css/notes.css')
@section('title')

@section('content')
<div class="list">
    <div class="row">
    @foreach($plans as $plan)
        <div class="col-sm-6 col-md-4">
        <a href="/deleteplan/{{ $plan->id }}"><i class="fa-regular fa-x"></i></a>
            <div class="object">
            <center>
                <p style="color: {{ $plan->tag->color }}">
                    {{ $plan->tag->name }}
                </p>
                {{ $plan->date }}
                </center>
                {{ $plan->description }}
            </div>
        </div>
    @endforeach
    </div>
</div>

@stop