@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-center " style="margin-top: 5%; margin-bottom: 5%;">
    <h1 id="queue1" class="text-white"></h1>
</div>
<div class="d-flex justify-content-center">
    <h3 id="queue2" class="text-white"></h3>
</div>
<div class="d-flex justify-content-center">
    <h6 id="queue6" class="text-white"></h6>
</div>
<div class="d-flex justify-content-center">
    <table id="queueTable" class="table table-hover " style="background-color: #700B97; width: 50%;">
        <thead>
            <tr>
                <th class="tg-baqh" style="text-align: center;" colspan="2">
                    <h3 id="queue3" class="text-white"></h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th id="queueTable1" class="tg-baqh text-white" style="text-align: center;" colspan="2"></th>
            </tr>
            <tr>
                <td id="queueTable2" class="tg-baqh text-white" style="text-align:right;"></td>
                <td id="queueTable3" class="tg-baqh text-white">8:00-17:30</td>
            </tr>
            <tr>
                <td id="queueTable4" class="tg-baqh text-white" style="text-align:right;"></td>
                <td id="queueTable5" class="tg-baqh text-white">8:00-12:30</td>
            </tr>
            <tr>
                <td id="queueTable6" class="tg-baqh text-white" style="text-align:right;"></td>
                <td id="queueTable7" class="tg-baqh text-white"></td>
            </tr>
            <tr>
                <th id="queueTable8" class="tg-baqh text-white" style="text-align: center;" colspan="2"></th>
            </tr>
            <tr>
                <td id="queueTable9" class="tg-baqh text-white" style="text-align:right;"></td>
                <td id="queueTable10" class="tg-baqh text-white"></td>
            </tr>
        </tbody>
    </table>
</div>
    <div>
<div class="d-flex justify-content-center">
    <p id="queue38" class="fs-3 text-white"></p>
</div>
<div class="d-flex justify-content-center">
    <a href="regulations"><p id="queue39" class="fs-3 text-white"></p></a>
</div>
<div class="d-flex justify-content-center">
    <p id="queue4" class="fs-3 text-white"></p>
</div></div>
<div class="d-flex justify-content-center" style="
    background-image: url('{{ url('/api/photos/20') }}');
    background-repeat: no-repeat;
    background-size:contain;
    background-position:center;
    ">
    <iframe id="camera_workshop" class="camera_hidden" width="640" height="480" src="https://rtsp.me/embed/KBySA3b7/" frameborder="0" allowfullscreen></iframe>
</div>
<div class="d-flex justify-content-center">
    <p id="queue5" class="fs-3 text-white"></p>
</div>
<div><br></div>
<div class="d-flex justify-content-center" style="
    background-image: url('{{ url('/api/photos/21') }}');
    background-repeat: no-repeat;
    background-size:contain;
    background-position:center;
    ">
    <iframe id="camera_autowash" class="camera_hidden" width="640" height="480" src="https://rtsp.me/embed/8Ei63nfK/" frameborder="0" allowfullscreen></iframe>
</div>
<script>
    window.onload = function() {
        check_cameras();
    };

</script>
{!! htmlScriptTagJsApi([
    'action' => 'queue',
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
    ]) !!}
@stop
