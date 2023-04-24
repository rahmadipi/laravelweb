@extends('layouts.main')

@section('header')
<div class="container mt-4 text-center">
    <h1>{{ $menu }}</h1>
    <div class="w-100">
        <hr class="my-3">
    </div>
</div>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>{{ $site_descriptions->owner }}</title>
                <image width="140" height="140" xlink:href="{{ asset('storage/site-desc/owner.jpg') }}"></image>
                <circle cx="70" cy="70" r="70" stroke="#dc3545" stroke-width="5" fill="none" />
            </svg>

            <h2 class="mt-3">{{ $site_descriptions->owner }}</h2>
            <p>an Indonesian Web Programmer.</p>
            <p class="fs-3">
                <a href="https://wa.me/6289524469080" class="text-decoration-none" style="color:#51cd5d;"
                    target="_blank"><i class="bi bi-whatsapp"></i></a> <a href="mailto:putrarahmadi615@gmail.com"
                    class="text-decoration-none" style="color:#ea4335;" target="_blank"><i class="bi bi-google"></i></a>
                <a href="https://id.linkedin.com/in/putrarahmadi" class="text-decoration-none" style="color:#0a66c2;"
                    target="_blank"><i class="bi bi-linkedin"></i> <a href="https://github.com/rahmadipi"
                        class="text-decoration-none" style="color:#24292f;" target="_blank"><i
                            class="bi bi-github"></i></a>
            </p>
        </div>
        <div class="col-lg-8">
            <p style="text-indent:30px;text-align:justify;">
                Hi! my name is <b>Putra Rahmadi</b>, but i often use <b>rahmadipi</b> as my online nick name so feel
                free to choose
                which
                one you want to call me. Currently i live in Klaten regency, it's located east side from Special Region
                of
                Yogyakarta, you can visit me when you go
                there!. I'm a programming enthusiast, learned start from basic web programming stuff like html, css, and
                javascript; continuing with native PHP and MySQL database; making some projects with PHP framework
                Codeigniter 3; and then
                currently honing my PHP skill by learn Laravel framework; and soon i will learn more up-to-date
                programming
                language and framework like Vue and React. I'm interested to learn more javascript after using a lot of
                ajax in my
                codeigniter projects, it's fun.
            </p>
            <p style="text-indent:30px;text-align:justify;">
                I like to do digital design too, other than programming. I
                used to play around with Coreldraw to make logo and banner. I also use Adobe Photoshop but only to make
                gif
                file from cropped video scene. For animation i use Adobe Flash, it was fun
                to slip in some scripts inside it to make swf animation or a desktop software with full animations.
                Flash
                was fun until
                it lost it's golden era because browser don't support Flash embeded anymore haha. You can count on me
                with video editing too, i have experience using Sony Vegas Pro, Adobe Premiere, and Adobe After Effects
                to
                edit video; Aegisub to make subtitle with karaoke effects; also tried a bit of audio softwares FL Studio
                and
                Audacity. I would like to working with you on business or hobby projects.
            </p>
        </div>
    </div>
</div>
@endsection