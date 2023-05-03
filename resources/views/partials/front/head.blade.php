<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--
<link rel="stylesheet" href="{{ asset('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
{{--
<link rel="stylesheet" href="{{ asset('vendor/twbs/bootstrap-icons/font/bootstrap-icons.css') }}"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">
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