<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.front.head')
</head>

<body class="pt-5">
    @include('partials.front.navbar')
    <div class="container mt-4 text-center">
        @yield('header')
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
    <div class="container mt-4">
        @yield('footer')
    </div>

    <div>
        @include('partials.front.script')
    </div>
</body>

</html>