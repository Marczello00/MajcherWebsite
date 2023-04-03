<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Serwis Opon Majcher</title>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6H7934L02X"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6241220846160598"
     crossorigin="anonymous"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6H7934L02X');
</script>

<link rel="icon" href="/api/photos/50" type="image/x-icon">
<!-- load bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/api/res/0') }}"></script>
<!-- AOS library-->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ url('/api/res/1') }}" />
<link rel="stylesheet" href="https://oponymajcher.pl/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    function callbackThen(response) {
        // read HTTP status
        //console.log(response.status);

        // read Promise object
        response.json().then(function(data) {
            //console.log(data);
        });
    }

    function callbackCatch(error) {
        console.error('Error:', error)
    }

</script>

