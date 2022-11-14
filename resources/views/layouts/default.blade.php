<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="container bg-black"  onload="checkCookieLanguage()">

    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>
    </div>
    <div id="main" class="row" style="">
        @yield('content')
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
    
</body>

</html>