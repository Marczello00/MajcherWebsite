<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="container-fluid bg-black" onload="checkCookieLanguage()" style="font-family:cursive">

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

</body>

</html>
