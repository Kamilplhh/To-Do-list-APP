@extends('layouts.master')
@vite('resources/css/add.css')
@section('title', 'ADD')

@section('content')
<div class="space">
        <div class="triangle" id="triangle">
            <div class="face front">
                <h2>ADD PLAN</h2><br>
                <form method="POST" action="">
                    @csrf
                    <input type="text" name="" placeholder=""></input><br>
                    <input type="text" name="" placeholder=""></input><br>
                    <button type="submit">ADD Plan</button>
                </form>
            </div>

            <div class="face left">
                <h2>ADD NOTE</h2><br>
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="" placeholder=""></input><br>
                    <input type="text" name="" placeholder=""></input><br>
                    <input type="text" name="" placeholder=""></input><br>
                    <button type="submit">ADD note</button>
                </form>
            </div>

        </div>
        <i class="fa-solid fa-rotate fa-xl" id="rotate"></i>
    </div>

@stop