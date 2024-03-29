<div id="copyright text-right"><br><br> </div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

</script>
<!-- cookie warning toast -->
<div class="fixed-bottom p-4">
    <div id="toastCookie1" class="toast text-white w-100 mw-100" role="alert" data-bs-autohide="false">
        <div class="toast-body p-4 d-flex flex-column">
            <div class="d-flex flex-row p-2">
                <div id="footCookie1"></div>
                <div><a id="footCookie2" href='/privacy'></a></div>
            </div>
            <div class="ml-auto">
                <button type="button" class="btn btn-light" id="btnAccept">
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    // Function to show the cookie consent toast
    function cookieConsent() {
        // Check if the cookie 'allowCookies' exists
        if (!getCookie('allowCookies')) {
            // If the cookie does not exist, show the toast
            $('.toast').toast('show')
        }
    }

    // Action to take when the 'Deny' button is clicked
    $('#btnDeny').click(() => {
        // Delete the cookie 'allowCookies'
        eraseCookie('allowCookies')
        // Hide the toast
        $('.toast').toast('hide')
    })

    // Action to take when the 'Accept' button is clicked
    $('#btnAccept').click(() => {
        // Create a new cookie 'allowCookies' with the value '1' and an expiration date of 7 days
        setCookie('allowCookies', '1', 7)
        // Hide the toast
        $('.toast').toast('hide')
    })
    // Run the function when the page is ready
    $(document).ready(function() {
        cookieConsent()
    });

</script>

<div id="mainFooter1" class="card" style="background-color: #3E065F; color: #fff;">

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card-body">
                    <h5 id="footNav" class="card-title"></h5>
                    <ul class="navbar-nav">
                        <li><a id="footNav1" class="nav-link active" href="/"></a></li>
                        <li><a id="footNav2" class="nav-link active" href="/queue"></a></li>
                        <li><a id="footNav3" class="nav-link active" href="/contact"></a></li>
                        <li><a id="footNav4" class="nav-link active" href="/gallery"></a></li>
                        <li><a id="footNav5" class="nav-link active" href="/privacy"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <h5 id="footLinks" class="card-title"></h5>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v15.0" nonce="lm4zSAo5"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/majcher.serwis/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/majcher.serwis/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/majcher.serwis/">Majcher - Myjnia oraz Serwis opon</a></blockquote>
                    </div>
                    <div style="margin-top: 5%;">2018-<span id="year"></span>© Marcel Majcher ver 2.0</div>
                    <script>
                        document.getElementById("year").innerText = new Date().getFullYear();

                    </script>
                </div>
            </div>
        </div>
    </div>
