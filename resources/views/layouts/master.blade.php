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
            Section 1 <br>
                <a href="">Link #1</a><br>
                <a href="">Link #2</a>
        </div>
        <div class="links">
            Section 2<br>
            <a href="">Link #1</a><br>
            <a href="">Link #2</a>
        </div>
    </div>
    @show


    
    <div class="block">
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
    @yield('content')
    
    </div>

</body>

</html>