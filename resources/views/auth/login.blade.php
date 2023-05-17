@section('title', 'Login')
@vite('resources/css/login.css')
@extends('layouts.master')

@section('content')
<div class="login">
    <div class="object">
        @if(session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="triangle" id="triangle">
            <div class="face front">
                <h2>Login</h2><br>
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <input type="text" name="email" placeholder="Email"></input><br>
                    <input type="password" name="password" placeholder="Password"></input><br>
                    <button type="submit">Sign in</button>
                </form>
            </div>

            <div class="face left">
                <h2>Register</h2><br>
                <form action="{{ route('register.custom') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Email" name="email" required></input><br>
                    <input type="text" placeholder="Name" name="name" required></input><br>
                    <input type="password" placeholder="Password" name="password" required></input></input><br>
                    <button type="submit">Sign up</button>
                </form>
            </div>

        </div>
        <i class="fa-solid fa-rotate fa-xl" id="rotate"></i>
    </div>
</div>
@stop