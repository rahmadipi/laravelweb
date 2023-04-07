<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    @yield('head')
</head>

<body class="pt-5">
    @include('partials.navbar')
    @yield('header')
    @yield('content')

    <div>
        @include('partials.script')
    </div>
</body>

</html>