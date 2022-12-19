@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-center text-light"> <h1>Kolejka</h1></div>
<div class="d-flex justify-content-center text-light" style="margin-top: 5%; margin-bottom: 5%;"> <h3>Udostępniamy możliwość sprawdzenia aktualnej kolejki na wymianę opon oraz na myjnię</h3></div>
   <div class="d-flex justify-content-center">
      <table class="table table-dark table-hover " style="width: 50%;">
         <thead>
            <tr>
               <th class="tg-baqh" style="text-align: center;" colspan="2"><h3>Czas działania kamer</h3></th>
            </tr>
         </thead>
      <tbody>
         <tr>
            <th class="tg-baqh" style="text-align: center;" colspan="2">Kamera na warsztat</th>
          </tr>
         <tr>
           <td class="tg-baqh" style="text-align:right;">poniedziałek-piątek</td>
           <td class="tg-baqh">7:45-17:45</td>
         </tr>
         <tr>
           <td class="tg-baqh"style="text-align:right;">sobota</td>
           <td class="tg-baqh">7:45-12:45</td>
         </tr>
         <tr>
           <td class="tg-baqh"style="text-align:right;">niedziela</td>
           <td class="tg-baqh">niedostępne</td>
         </tr>
         <tr>
           <th class="tg-baqh" style="text-align: center;" colspan="2">Kamera na myjnię</th>
         </tr>
         <tr>
           <td class="tg-baqh"style="text-align:right;">cały tydzień</td>
           <td class="tg-baqh">dostępne całodobowo</td>
         </tr>
       </tbody>
    </table></div>
    <div class="d-flex justify-content-center text-light">
      <p class="fs-3">Aktualna kolejka do warsztatu:</p>
    </div>
    <div class="d-flex justify-content-center text-light" style="
    background-image: url('/img/camera_off.png');
    background-repeat: no-repeat;
    background-size:contain;
    background-position:center;
    ">
      <iframe id="camera_workshop" class="camera_hidden" width="640" height="480" src="https://rtsp.me/embed/KBySA3b7/" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="d-flex justify-content-center text-light">
      <p class="fs-3">Aktualna kolejka do myjni:</p>
    </div>
    <div><br></div>
    <div class="d-flex justify-content-center text-light" style="
    background-image: url('/img/camera_off.png');
    background-repeat: no-repeat;
    background-size:contain;
    background-position:center;
    ">
      <iframe id="camera_autowash" style="visibility: none" width="640" height="480" src="https://rtsp.me/embed/TTEFSiYf/" frameborder="0" allowfullscreen></iframe>
    </div>
    <script>
    window.onload = function() {
      check_cameras();
    };
    </script>
@stop