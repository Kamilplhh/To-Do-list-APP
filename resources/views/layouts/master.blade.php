<html>

<head>
    <title>To-Do-list - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
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
            Section 1
            <ul>
                <li><a href="">Link #1</a></li>
                <li><a href="">Link #2</a></li>
            </ul>
        </div>
        <div class="links">
            Section 2
            <ul>
                <li><a href="">Link #1</a></li>
                <li><a href="">Link #2</a></li>
            </ul>
        </div>
    </div>
    @show


    @yield('content')
    <div class="block">
        <div class="section clip">
            <div class="cart clip">
                Today
            </div>
            <div class="cart clip">
                Tomorrow
            </div>
        </div>

    </div>


</body>

</html>