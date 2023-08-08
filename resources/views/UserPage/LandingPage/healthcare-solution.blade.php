<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Healthcare Solution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
</head>

<body>
    {{-- Header --}}
    <header class="header">
        @include('UserPage.Layouts.navbar')
    </header>
    {{-- End Header --}}

    @include('UserPage.Layouts.wa-button')

    {{-- Video --}}
    <section class="section-video-healthcare">
        <div class="video-healthcare">
            <div class="container">
                <div class="text-healthcare">
                    <h1>NCI - MediSmart</h1>
                </div>
                <div class="content-healthcare">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/65pOIFtQUyg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen controls muted></iframe>
                    {{-- <video src="{{ asset('assets/vid/dummy.mp4') }}" controls muted></video> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- End Video --}}

    {{-- Visi Misi --}}
    <section class="section-visimisi">
        <div class="container">
            <div class="description">
                <div class="image-description">
                    <img src="{{ asset('assets/img/Logo Medismart.png') }}" alt="">
                </div>
                <div class="text-description">
                    <p>NCI-MediSmart memberikan solusi bagi fasilitas kesehatan Indonesia untuk bertransformasi dengan
                        layanan digital dan teknologi terbarukan untuk mendukung fasilitas kesehatan mencapai hasil
                        terbaik dengan skala yang besar.</p>
                </div>
            </div>
            <div class="visimisi">
                <div class="visi">
                    <h1>Visi</h1>
                    <p>Diisi dengan visi</p>
                </div>
                <div class="misi">
                    <h1>Misi</h1>
                    <p>Diisi dengan misi</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Visi Misi --}}


    {{-- Question --}}
    {{-- End Question --}}

    {{-- Footer --}}
    <footer>
        @include('UserPage.Layouts.footer')
    </footer>
    {{-- End Footer --}}
</body>

<script src="{{ asset('Js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('Js/Script.js') }}"></script>

</html>
