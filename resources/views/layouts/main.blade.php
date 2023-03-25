<!DOCTYPE html>
<html lang="en">

<head>
    @dd($site_descriptions)
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>

    <div>
        @include('partials.script')
    </div>
</body>

</html>