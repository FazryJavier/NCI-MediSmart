<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMRS NCI Medismart</title>
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

    {{-- Home --}}
    {{-- End Home --}}

    {{-- Client --}}
    {{-- End Client --}}

    {{-- Advantage --}}
    {{-- End Advantage --}}

    {{-- Footer --}}
    <footer>
        @include('UserPage.Layouts.footer')
    </footer>
    {{-- End Footer --}}
</body>

<script src="{{ asset('Js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('Js/Script.js') }}"></script>

</html>
