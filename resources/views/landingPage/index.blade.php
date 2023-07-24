<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCI MediSmart</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    {{-- Header --}}
    <header>
        <nav class="uppernav flex">
            <div class="left flex">
                <div class="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="youtube">
                    <i class="fa-brands fa-youtube"></i>
                </div>
                <div class="linkedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
            </div>
            <div class="right flex">
                <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>022 8735 6050</span>
                </div>
                <div class="location">
                    <ul>
                        <li><a href="#"><button>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Kantor Bandung</span></button></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar">
            <a href="#" class="logo"><img src="{{ asset('assets/img/Logo Medismart.png') }}" alt="Medismart"
                    class="logo" /></a>
            <ul>
                <li><a href="#">Produk <span>&#x25BE;</span></a>
                    <ul>
                        <li><a href="#">SIM-RS</a></li>
                        <li><a href="#">RME</a></li>
                    </ul>
                </li>
                <li><a href="#">Tentang Kami <span>&#x25BE;</span></a>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <a href=""><button>Hubungi Kami</button></a>
        </nav>
    </header>
    {{-- Header End --}}

    {{-- Home --}}
    <div class="header-text">
        <br /><br />
        <h1>
            Solusi Teknologi <br> Penunjang Fasilitas <br> Pelayanan Kesehatan <br> Sejak 1991
        </h1>
        <button class="button1">Hubungi Kami</button>
        <button class="button2">Pelajari Lanjut</button>
    </div>
    {{-- Home End --}}

    {{-- Client --}}
    <div class="client">

    </div>
    {{-- Client End --}}
</body>

</html>
