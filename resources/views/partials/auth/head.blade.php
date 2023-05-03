<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="{{ $site_descriptions->owner }}">
<title>{{ $site_descriptions->title }}</title>
<link rel="apple-touch-icon" sizes="180x180"
    href="{{ asset('storage/site-desc/'.$site_descriptions->icon) }}/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32"
    href="{{ asset('storage/site-desc/'.$site_descriptions->icon) }}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16"
    href="{{ asset('storage/site-desc/'.$site_descriptions->icon) }}/favicon-16x16.png">
<link rel="manifest" href="{{ asset('storage/site-desc/'.$site_descriptions->icon) }}/site.webmanifest">
<link rel="mask-icon" href="{{ asset('storage/site-desc/'.$site_descriptions->icon) }}/safari-pinned-tab.svg"
    color="#dc3545">
<meta name="msapplication-TileColor" content="#dc3545">
<meta name="theme-color" content="#dc3545">

<!-- Bootstrap core CSS -->
{{--
<link href="{{ asset('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<!-- Custom styles for this template -->
<link href="{{ asset('custom/css/dashboard.css') }}" rel="stylesheet">