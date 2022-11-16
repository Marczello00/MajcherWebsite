<div id="copyright text-right">© 2022  </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!-- cookie warning toast -->
<div class="fixed-bottom p-4">
        <div class="toast bg-dark text-white w-100 mw-100" role="alert" data-bs-autohide="false">
            <div class="toast-body p-4 d-flex flex-column">
                <p>
                    Ta strona wykorzystuje pliki cookie do analizowania ruchu i mierzenia skuteczności reklam. Więcej informacji o tym, jak używamy plików cookie
                </p>
                <div class="ml-auto">
                    <button type="button" class="btn btn-light" id="btnAccept">
                        Akceptuję, zamknij
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cookieConsent() {
            if (!getCookie('allowCookies')) {
                $('.toast').toast('show')
            }
        }

        $('#btnDeny').click(() => {
            eraseCookie('allowCookies')
            $('.toast').toast('hide')
        })

        $('#btnAccept').click(() => {
            setCookie('allowCookies', '1', 7)
            $('.toast').toast('hide')
        })
        $(document).ready(function() {
            cookieConsent()
        });
    </script>