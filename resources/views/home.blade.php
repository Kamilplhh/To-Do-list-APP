@extends('layouts.master')
@vite('resources/css/home.css')
@vite('resources/js/home.js')
@section('title', 'HOME')

@section('content')
<div class="section">
    <a href="/date">
        <div class="cart">
            This week       
        </div>
    </a> 
    <a href="/important">
        <div class="cart">   
            Important   
        </div>
    </a> 
</div>
<div class="list">
    <div class="row">
        @foreach($plans as $plan)
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object" value="{{ $plan->id }}">
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
    <h1>DONE</h1>
</div>

<div id="remove">
    <h1>REMOVE</h1>
</div>

@stop