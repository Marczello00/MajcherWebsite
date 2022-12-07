@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-center text-light"> <h2>Udostępniamy możliwość sprawdzenia aktualnej kolejki na wymianę opon oraz na myjnię</h2></div>
   <div class="d-flex justify-content-center">
      <table class="table table-dark table-hover table-responsive" style="width: 50%;">
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
           <td class="tg-baqh">nieczynne</td>
         </tr>
         <tr>
           <th class="tg-baqh" style="text-align: center;" colspan="2">Kamera na myjnię</th>
         </tr>
         <tr>
           <td class="tg-baqh"style="text-align:right;">cały tydzień</td>
           <td class="tg-baqh">czynne całodobowo</td>
         </tr>
       </tbody>
    </table></div>
    <div class="d-flex justify-content-center text-light"><iframe width="640" height="480" src="https://rtsp.me/embed/KBySA3b7/" frameborder="0" allowfullscreen></iframe></div>

@stop