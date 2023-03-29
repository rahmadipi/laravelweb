<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="pt-5">
    @include('partials.navbar')
    <div class="container mt-4 text-center">
        @yield('header')
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>

    <div>
        @include('partials.script')
    </div>
</body>

</html>