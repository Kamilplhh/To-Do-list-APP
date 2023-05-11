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
            <h4>Sign in</h4>
        </div>

        <div class="links">
            <a href="/home">Planner</a><br>
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