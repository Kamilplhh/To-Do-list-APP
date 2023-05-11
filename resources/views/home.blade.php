@extends('layouts.master')
@vite('resources/css/home.css')
@vite('resources/js/home.js')
@section('title', 'home')

@section('content')
<div class="section">
    <div class="cart">
        Today
    </div>
    <div class="cart">
        This week
    </div>
    <div class="cart">
        Important
    </div>
</div>
<div class="list">
    <div class="row">
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                a
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                b
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                c
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                d
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                e
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                f
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                g
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3">
            <div class="object">
                h
            </div>
        </div>
    </div>
</div>

<div id="done">
    <h1>DONE 334 789</h1>
</div>

<div id="remove">
    <h1>REMOVE 1316 789</h1>
</div>

@stop