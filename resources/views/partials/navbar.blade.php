<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ $site_descriptions->title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link{{ $menu=='Home'?' active':'' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ $menu=='Blog'?' active':'' }}" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ $menu=='Category'?' active':'' }}" href="{{ url('/category') }}">Category</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Portofolio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/portfolio/php-native') }}">PHP Native</a>
                        <a class="dropdown-item" href="{{ url('/portfolio/codeigniter-3') }}">Codeigniter 3</a>
                        <a class="dropdown-item" href="{{ url('/portfolio/laravel-8') }}">Laravel 8</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/portfolio/coreldraw') }}">Coreldraw</a>
                        <a class="dropdown-item" href="{{ url('/portfolio/adobe-flash') }}">Adobe Flash</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/portfolio') }}">Tampilkan semua</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ $menu=='About'?' active':'' }}" href="{{ url('/about') }}">About</a>
                </li>
            </ul>
            <form class="d-flex ms-auto" action="{{ url('/blog') }}" method="GET">
                <input class="form-control me-2" type="search" name="search" value="{{ request('search') }}"
                    placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item py-1">
                    <div class="vr h-100 mx-2 border-left border-light"></div>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/dashboard') }}"><i
                                    class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf

                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link{{ $menu=='Login'?' active':'' }}" href="{{ url('/login') }}">Login <i
                            class="bi bi-box-arrow-in-right"></i></a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>