<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body id="mainBackground1" class="container-fluid bg-black" onload="" style="font-family: 'Signika Negative', sans-serif;">

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
    <script type="text/javascript"> var infolinks_pid = 3395374; var infolinks_wsid = 0; </script> <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>
</body>

</html>
