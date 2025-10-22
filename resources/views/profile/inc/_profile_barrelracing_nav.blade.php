<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <!-- Business Name (Left) -->
        <a class="navbar-brand me-4" href="{{ url('/profile/' . $owner->id) }}#page-top">
            {{ $owner->business_name ?? '' }}
            <h6>Contact</h6>
        </a>


        <!-- Toggler goes next and aligns right -->
        <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded ms-auto"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation">
            Menu <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible content (two navs inside) -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="d-flex w-100 justify-content-between flex-wrap">
                <!-- LEFT NAVIGATION -->
                <ul class="navbar-nav text-uppercase me-auto">

                    <li class="nav-item mx-2">
                        <a class="nav-link d-flex flex-column align-items-center py-3 px-0 px-lg-3 rounded"
                           href="{{ url('/profile/' . $owner->id) }}#posts"">
                            <span data-lucide="FileText" class="mb-1" style="font-size: 1.2rem;"></span>
                            <span class="small">Posts</span>
                        </a>
                    </li>

                    @if (!empty($owner->about))
                    <li class="nav-item mx-2">
                        <a class="nav-link d-flex flex-column align-items-center py-3 px-0 px-lg-3 rounded"
                           href="{{ url('/profile/' . $owner->id) }}#about"">
                            <span data-lucide="info" class="mb-1" style="font-size: 1.2rem;"></span>
                            <span class="small">About</span>
                        </a>
                    </li>
                    @endif

                </ul>

                <!-- RIGHT NAVIGATION -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/profile/' . $owner->id) }}#apps">
                            <span data-lucide="blocks" class="mb-1" style="font-size: 1.2rem;"></span>
                            <span class="small">Apps & Info</a></span>
                    </li>
                    <li class="nav-item mx-2">
                        @if(auth()->check())
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/manage') }}">
                            <span data-lucide="user-round" class="mb-1" style="font-size: 1.2rem;"></span>
                            <span class="small">My Account</span></a>
                        @else
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/login') }}">
                            <span data-lucide="log-in" class="mb-1" style="font-size: 1.2rem;"></span>
                            <span class="small">Log In</span>
                        </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}">
                            <img src="https://hotlinewebsites.com/assets/img/barrel-racer-WHITEwFlame.png"
                                 width="35"
                                 height="26"
                                 alt="Barrel Race Hotline">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<script>
document.querySelectorAll('#navbarResponsive .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const navbar = document.getElementById('navbarResponsive');
        if (navbar.classList.contains('show')) {
            new bootstrap.Collapse(navbar).hide();
        }
    });
});
document.addEventListener('click', (event) => {
    const navbar = document.getElementById('navbarResponsive');
    const toggle = document.querySelector('.navbar-toggler');

    if (navbar.classList.contains('show') &&
        !navbar.contains(event.target) &&
        !toggle.contains(event.target)) {
        new bootstrap.Collapse(navbar).hide();
    }
});
</script>
