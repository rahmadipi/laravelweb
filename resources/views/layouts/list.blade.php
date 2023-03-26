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
        @yield('content')
    </div>
    <div class="container mt-4">
        @yield('footer')
    </div>

    <div>
        @include('partials.script')
    </div>
</body>

</html>