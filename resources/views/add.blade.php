@extends('layouts.master')
@vite('resources/css/add.css')
@section('title', 'ADD')

@section('content')
<div class="space">
        <div class="triangle" id="triangle">
            <div class="face front">
                <h2>ADD PLAN</h2>
                <form method="POST" action="">
                    @csrf
                    <textarea name="" placeholder="Description" id="textarea"></textarea><br>
                    <input type="date" id="datePickerId"><br>
                    <select name="cars" id="cars">
                        <option value="" disabled selected hidden>Select your tag</option>
                        <option value="daily">Daily</option>
                    </select><br>
                    <input type="checkbox" name="important">
                    <label for="important">Important</label><br>
                    <button type="submit">ADD</button>
                </form>
            </div>

            <div class="face left">
                <h2>ADD NOTE</h2>
                <form action="" method="POST">
                    @csrf
                    <textarea name="" placeholder="Description" id="textarea"></textarea><br>
                    <button type="submit">ADD</button>
                </form>
            </div>

        </div>
        <i class="fa-solid fa-rotate fa-xl" id="rotate"></i>
    </div>

@stop