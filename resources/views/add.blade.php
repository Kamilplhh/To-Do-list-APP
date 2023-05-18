@extends('layouts.master')
@vite('resources/css/add.css')
@vite('resources/js/add.js')
@section('title', 'ADD')

@section('content')
<div class="space">
    <div class="triangle" id="triangle">
        <div class="face front">
            <h2>ADD PLAN</h2>
            <form method="POST" action="{{ route('Plan') }}">
                @csrf
                <textarea name="description" placeholder="Description" id="textarea"></textarea><br>
                <input name="date" type="date" id="datePickerId"><br>
                <select name="tag" id="tag">
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select><br>
                <input type="checkbox" value="1" name="important">
                <label for="important">Important</label><br>
                <button type="submit">ADD</button>
            </form>
        </div>

        <div class="face left">
            <h2>ADD NOTE</h2>
            <form action="{{ route('Note') }}" method="POST">
                @csrf
                <textarea name="description" placeholder="Description" id="textarea"></textarea><br>
                <button type="submit">ADD</button>
            </form>
        </div>

        <div class="face right">
            <h2>ADD TAG</h2>
            <form action="{{ route('Tag') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Tag name"><br>
                    <input type="color" name="color" value="#ff0000">
                <label for="head">Color</label><br>
                <button type="submit">ADD</button>
            </form>
        </div>

    </div>
</div>
<i class="fa-solid fa-arrow-left fa-xl" id="rotateL"></i>
<i class="fa-solid fa-arrow-right fa-xl" id="rotateR"></i>
@stop