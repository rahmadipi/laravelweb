<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ $site_descriptions->title }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item{{ $menu=='Home'?' active':'' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item{{ $menu=='Blog'?' active':'' }}">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item{{ $menu=='Category'?' active':'' }}">
                    <a class="nav-link" href="{{ url('/category') }}">Category</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Portofolio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                <li class="nav-item{{ $menu=='About'?' active':'' }}">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mr-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                <li class="nav-item py-1">
                    <div class="vr h-100 mx-2 border-left border-light"></div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="/blog" method="GET">
                <input class="form-control mr-sm-2" type="search" name="search" value="{{ request('search') }}"
                    placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>