<!doctype html>
<html lang="en">

<head>
    @include('partials/auth/head')
    @yield('head')
</head>

<body>
    @include('partials/auth/header')

    <div class="container-fluid">
        <div class="row">
            @include('partials/auth/navbar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    @yield('foot')
    @include('partials/auth/script')
</body>

</html>