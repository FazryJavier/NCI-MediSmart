<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCI MediSmart</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="example">
    {{-- Header --}}
    <header>
        <nav class="uppernav flex">
            <div class="left flex">
                <div class="instagram">
                    {{-- <i class="fa-brands fa-instagram"><a href="https://www.instagram.com/ncimedismart/"></a></i> --}}
                    {{-- <a href="https://www.instagram.com/ncimedismart/"> --}}
                    <a href="https://www.instagram.com/ncimedismart/" target="blank"></a>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="youtube">
                    <a href="https://www.youtube.com/channel/UCk387Q9EKjvHiJw61tknU1Q" target="blank"></a>
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
        <div class="col">
            <div class="row1">
                <p><b>Layanan kesehatan yang bekerja sama dengan kami</b></p>
            </div>
            <div class="container-line">
                <div class="center-line"></div>
            </div>
            <div class="row2">
                <img src="{{ asset('assets/img/Client.png') }}" alt="Client">
            </div>
            <div class="custom-shape-divider-bottom-1690273045">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>
    {{-- Client End --}}

    {{-- Experience --}}
    <div id="experience">
        <div class="container">
            <div class="row align-items-center mb-10">
                <div class="col">
                    <p><b>Pengalaman</b> lebih dari <b>30 Tahun </b>di Dunia <b>Teknologi Informasi</b>
                        <br><b>Lebih </b>dari <b>100 Fasilitas Kesehatan </b> di Wilayah <b>Indonesia</b> telah<br>
                        Bekerja Sama dengan Kami
                    </p>
                </div>
                <br>
                <br>
                <div class="row align-items-center mb-3">
                    <div class="text">
                        <p>Kami telah menciptakan pola kemitraan dalam pengembagan sistem informasi untuk menggantikan
                            pola
                            <br>
                            konvensional pelanjut - pembeli yang selama ini menjadi sumber utama kegagalan pengembangan
                            sistem<br>
                            informasi
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="experience-list">
                <div>
                    {{-- <i class="fa-solid fa-code"></i> --}}
                    <img src="{{ asset('assets/img/warning_shield.png') }}" alt="integrasi satu sehat" width="100" height="100">
                    <h2>Integrasi SatuSehat</h2>
                    <p>
                        Seluruh produk NCI-MediSmart siap diintegrasikan dengan aplikasi nasional Satu Sehat untuk
                        mendukung kinerja Fasyankes Anda.
                    </p>
                </div>
                <div>
                    {{-- <i class="fa-solid fa-code"></i> --}}
                    <img src="{{ asset('assets/img/professional.png') }}" alt="profesional" width="100" height="100">
                    <h2>Profesional</h2>
                    <p>
                        Tim NCI-MediSmart terdiri dari SDM yang handal dan berpengalaman untuk menjamin standar kualitas
                        layanan kami
                    </p>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Jaminan Keberhasilan</h2>
                    <p>
                        Dukungan NCI-MediSmart tidak terbatas pada penyediaan solusi terbaik tapi juga keberhasilan
                        implementasinya.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="client-map">
                <div class="content"> 
                    <p><b>100+ Jumlah client di Indonesia</b></p>
                </div>
                <div class="maps">
                    <img src="{{ asset('assets/img/indonesia svg 2.png') }}" alt="profesional" width="780">
                </div> 
            </div>
        </div>
    </div>
    {{-- Experience End --}}

    {{-- Our Product --}}
    {{-- Our Product End --}}

    {{-- Video View --}}
    {{-- Video View End --}}

    {{-- Blog --}}
    {{-- Blog End --}}

    {{-- Footer --}}
    <div class="footer">
        <img src="{{ asset('assets/img/Logo NCI.png') }}" alt="Logo">
        <p>
            Copyright © 2023 PT NUANSA CERAH INFORMASI
        </p>
    </div>
    {{-- Footer End --}}

</body>

</html>
