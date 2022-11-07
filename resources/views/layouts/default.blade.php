<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="container" onload="checkCookieLanguage()">
    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>
    </div>
    <div id="main" class="row">
        @yield('content')
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>