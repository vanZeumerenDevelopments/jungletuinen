<nav class="position-fixed top-0 start-0 w-100 px-4 px-md-5 z-1000" style="height: 160px;">
    <div class="position-relative h-100 d-flex align-items-center justify-content-between menu-padding px-md-4">
        <!-- Logo -->
        <a href="/" class="d-block">
            <picture>
                <source srcset="{{ asset('images/logo.webp') }}" type="image/webp">
                <img 
                    src="{{ asset('images/logo.png') }}" 
                    alt="JungleTuin logo"
                    width="120"
                    height="120"
                    style="display: block;">
            </picture>
        </a>

        <!-- Hamburger knop (zichtbaar op md en kleiner) -->
        <button class="btn d-md-none z-11" id="hamburgerToggle" aria-label="Menu">
            &#9776;
        </button>

        <!-- Menu-items -->
        <div id="navMenu" class="d-none d-md-flex flex-md-row align-items-center gap-5 mobile-nav">
            <!-- Sluitknop alleen zichtbaar op mobiel -->
            <button class="btn d-md-none position-absolute top-0 end-0 m-5 fs-2 text-white" id="menuClose" aria-label="Sluiten">
                &times;
            </button>

            <a href="/" class="fw-bold text-decoration-none nav-link {{ request()->is('/') ? 'active' : '' }}">HOME</a>
            <a href="/eigen-jungletuin" class="fw-bold text-decoration-none nav-link {{ request()->is('eigen-jungletuin') ? 'active' : '' }}">EIGEN JUNGLETUIN</a>
            <a href="/contact" class="fw-bold text-decoration-none nav-link {{ request()->is('contact') ? 'active' : '' }}">CONTACT</a>
        </div>
    </div>
</nav>
