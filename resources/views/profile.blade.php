@extends('layouts.master')
@vite('resources/css/login.css')

@section('content')
<div class="account">
    @foreach($user as $user)
        <center><h1>Hello {{ $user->name }}</h1><br>
    
    <div class="form">
        <h2>Update your data here</h2>
        <form method="POST" action="{{ route('updateLogin') }}">
            @csrf
            <label for="{{ $user->name }}">Name</label>
            <input type="text" name="name" value="{{ $user->name }}" placeholder="{{ $user->name }}"></input><br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required></input><br>
            <button type="submit">Change</button></center>
        </form>
    </div>
    @endforeach
</div>

@stop