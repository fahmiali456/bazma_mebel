<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item {{ request()->routeIs('shop') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>

                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>

                <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>

                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @auth
                <li>
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/user.svg') }}">
                    </a>
                </li>
                @else
                <li>
                    <a class="nav-link" href="{{ route('login') }}">
                        <img src="{{ asset('images/user.svg') }}">
                    </a>
                </li>
                @endauth

                <li>
                    <a class="nav-link" href="{{ route('cart') }}">
                        <img src="{{ asset('images/cart.svg') }}">
                    </a>
                </li>
            </ul>
        </div>
    </div>

</nav>