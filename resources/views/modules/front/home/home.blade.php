@extends('layouts.main')

@section('head')
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
<link href="{{ asset('/custom/css/carousel.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($carousel as $k=>$item)
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $k }}" @if($k==0) class="active" @endif
            aria-current="true" aria-label="Slide {{ ($k+1) }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($carousel as $k=>$item)
        <div class="carousel-item @if($k==0) active @endif">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                @if($item->image)
                <image width="100%" height="100%" xlink:href="{{ asset('storage/'.$item->image) }}"></image>
                @else
                <image width="100%" height="100%" xlink:href="https://source.unsplash.com/random/1349x512/?animal">
                </image>
                @endif

                <rect width="100%" height="100%" fill="#777" fill-opacity="0.5" />
            </svg>

            <div class="container">
                <div
                    class="carousel-caption @if($item->position=='left') text-start @elseif($item->position=='right') text-end @endif">
                    <h1>{{ $item->title }}</h1>
                    <p>{{ $item->body }}</p>
                    <p><a class="btn btn-lg btn-danger" href="{{ $item->url }}">{{ $item->link }}</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4 d-flex flex-column">
            <div class="mb-auto">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Blog</title>
                    <image width="140" height="140" xlink:href="https://source.unsplash.com/random/140x140/?Blog">
                    </image>
                    <circle cx="70" cy="70" r="70" stroke="#dc3545" stroke-width="5" fill="none" />
                </svg>

                <h2 class="fw-bold">Blog</h2>
                <p>
                    We share our stories along the journey. So we can learn together and keep up-to-date with what's
                    going on
                    around us.
                </p>
            </div>
            <div class="mt-auto">
                <p><a class="btn btn-danger" href="{{ url('blog') }}">View Blog</a></p>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="mb-auto">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Services</title>
                    <image width="140" height="140" xlink:href="https://source.unsplash.com/random/140x140/?Services">
                    </image>
                    <circle cx="70" cy="70" r="70" stroke="#dc3545" stroke-width="5" fill="none" />
                </svg>

                <h2 class="fw-bold">Services</h2>
                <p>
                    We provide services such as developing website for online profile, online business, and personalized
                    information system; also digital design like logo and banner.
                </p>
            </div>
            <div class="mt-auto">
                <p><a class="btn btn-danger" href="#">View Services</a></p>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="mb-auto">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Projects</title>
                    <image width="140" height="140" xlink:href="https://source.unsplash.com/random/140x140/?Projects">
                    </image>
                    <circle cx="70" cy="70" r="70" stroke="#dc3545" stroke-width="5" fill="none" />
                </svg>

                <h2 class="fw-bold">Projects</h2>
                <p>
                    We would show our portfolio of our services contains of projects currently we're working on and our
                    previous projects. We will always growing and keep up-to-date with the current trends of technology.
                </p>
            </div>
            <div class="mt-auto">
                <p><a class="btn btn-danger" href="#">View Projects</a></p>
            </div>
        </div>
    </div>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                    mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
                <image width="100%" height="100%" xlink:href="https://source.unsplash.com/random/500x500/?cloud">
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this
                layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
                <image width="100%" height="100%" xlink:href="https://source.unsplash.com/random/500x500/?water">
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                intended to be actually read, simply here to give you a better view of what this would look like with
                some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
                <image width="100%" height="100%" xlink:href="https://source.unsplash.com/random/500x500/?leaf">
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

<footer class="container">
    <p class="float-end"><a href="#" class="text-decoration-none text-danger">Back to top <i
                class="bi bi-arrow-up"></i></a></p>
    <p>&copy; 2023-{{ now()->year }} {{ $site_descriptions->title }}.
        <?php /*
         &middot; <a href="#"
            class="text-decoration-none text-danger">Privacy</a> &middot;
        <a href="#" class="text-decoration-none text-danger">Terms</a>
        */ ?>
    </p>
</footer>
@endsection