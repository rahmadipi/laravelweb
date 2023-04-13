<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.front.head')
    @yield('head')
</head>

<body class="pt-5">
    @include('partials.front.navbar')
    @yield('header')
    @yield('content')

    <div>
        @include('partials.front.script')
    </div>
</body>

</html>