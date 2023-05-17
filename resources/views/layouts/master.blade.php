<html>

<head>
    <title>To-Do-list - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    @vite('resources/css/app.css')
</head>

<body>
    @vite('resources/js/app.js')
    @section('sidebar')
    <div class="sidenav">
        <div class="profile">
            @auth
            <a href="{{ route('signout') }}">
                <i class="fa-solid fa-right-from-bracket fa-xl"></i></a><br><br><br>
            <a href="/profile/{{ auth()->user()->id}}">
            @else
                <a href="/login">
            @endauth
                <i class="fa-solid fa-user fa-xl icon"></i></a>
        </div>

        <div class="links">
            <a href="/">Planner</a><br>
            <a href="/notes">NOTES</a><br>
            <a href="/add">ADD</a><br>
            <a href="/remove">REMOVE</a><br>
        </div>

        <div class="links">
            <h5>TAGS</h5>
            <i class="fa-solid fa-hashtag fa-xs" style="background-color:red;"></i><a href="/home">daily</a><br>
            <i class="fa-solid fa-hashtag fa-xs" style="background-color:green;"></i><a href="/home">job</a><br>
        </div>

        <div class="date">
            <p id="clock"></p>
            <p id="date"></p>
        </div>

    </div>
    @show



    <div class="block">
        @yield('content')

    </div>

</body>

</html>