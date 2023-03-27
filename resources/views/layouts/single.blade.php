<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('header')
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @yield('content')
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <div class="container mt-4">
        @yield('footer')
    </div>

    <div>
        @include('partials.script')
    </div>
</body>

</html>