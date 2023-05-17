@extends('layouts.master')
@vite('resources/css/home.css')
@vite('resources/js/home.js')
@section('title', 'home')

@section('content')
<div class="section">
    <div class="cart">
        This week
    </div>
    <div class="cart">
        Important
    </div>
</div>
<div class="list">
    <div class="row">
        @foreach($plans as $plan)
        <div class="col-4 col-sm-4 col-md-3">
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

<div id="done">
    <h1>DONE 334 789</h1>
</div>

<div id="remove">
    <h1>REMOVE 1316 789</h1>
</div>

@stop