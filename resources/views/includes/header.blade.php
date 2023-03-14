<div class="container" style="margin-bottom: 30px;">
    <div class="d-flex justify-content-center" style="margin-top:3%;">
        <a id="logo" href="/">
            <img id="imgLogo" class="img-fluid" src="{{ url('/api/photos/518') }}" style="height: 15vh; ">
        </a>
    </div>
</div>
<nav class="navbar navbar-expand-xxl navbar-dark justify-content-center rounded mb-5" style="background-color: #3E065F;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" id="navMainSite" href="/"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" id="navQueue" href="queue"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navContact" href="contact"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navGallery" href="gallery"></a>
                </li>
                <li class="nav-item">{{-- Change language here --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img id="imgLanguage" src="{{ url('/api/photos/528') }}" alt="" width="30vh">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="setLanguage(1)">Polski</a></li>
                        <li><a class="dropdown-item" onclick="setLanguage(2)">English</a></li>
                        <li><a class="dropdown-item" onclick="setLanguage(3)">Deutsch</a></li>
                    </ul>
                </li>
                </li>
                <li class="nav-item">{{-- Change color scheme here --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img id="imgTheme" src="{{ url('/api/photos/538') }}" alt="" width="30vh">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="setColorScheme(1);">Jasny</a></li>
                        <li><a class="dropdown-item" onclick="setColorScheme(2);">Ciemny</a></li>
                    </ul>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
