<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCI MediSmart</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="{{ asset('css/cdn.jsdelivr.net_npm_swiper@10.0.4_swiper-bundle') }}">
</head>

<body class="example">
    {{-- Header --}}
    <header>
        <div class="up-nav">
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
        </div>

        <div class="low-navbar">
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
                    <a class="menu" href="#"><i class="fa-solid fa-bars" style="color: #015028;"></i></a>
                    <a href=""><button>Hubungi Kami</button></a>
                </ul>
            </nav>
        </div>
    </header>
    {{-- Header End --}}

    {{-- Home --}}
    <div class="header-text">
        <br /><br />
        <h1>
            Solusi Teknologi Penunjang Fasilitas <br> Pelayanan Kesehatan <br> Sejak 1991
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
                    <img src="{{ asset('assets/img/warning_shield.png') }}" alt="warning-shield" width="100"
                        height="100">
                    <h2>Integrasi SatuSehat</h2>
                    <p>
                        Seluruh produk NCI-MediSmart siap diintegrasikan dengan aplikasi nasional Satu Sehat untuk
                        mendukung kinerja Fasyankes Anda.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('assets/img/professional.png') }}" alt="profesional" width="100"
                        height="100">
                    <h2>Profesional</h2>
                    <p>
                        Tim NCI-MediSmart terdiri dari SDM yang handal dan berpengalaman untuk menjamin standar kualitas
                        layanan kami
                    </p>
                </div>
                <div>
                    <img src="{{ asset('assets/img/chess.png') }}" alt="chess" width="100" height="100">
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
                    <img src="{{ asset('assets/img/indonesia.png') }}" alt="Indonesia" width="780">
                </div>
            </div>
        </div>
    </div>
    {{-- Experience End --}}

    {{-- Our Product --}}
    <div id="product">
        <div class="container">
            <h1 class="sub-title">Produk Kami</h1>
            <main class="grid">
                <div class="product-list">
                    <div class="product">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="" />
                            <div class="layer">
                                <h2>SIM-RS NCI MediSmart</h2>
                                <h3>Sistem Informasi Manajemen Rumah Sakit </h3>
                                <p>
                                    Dikembangkan dengan sistem modular, proses implementasi dilakukan bertahap dan
                                    terintegrasi antar modul.Mengelola aktivitas kegiatan dari Front Office sampai
                                    dengan
                                    Back Office, menghasilkan pelaporan secara lengkap dan cepat
                                </p>
                                <ul>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>SIMRS
                                        NCI-MediSmart</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi BPJS
                                        & V-Claim
                                    </li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Keuangan &
                                        Akuntansi
                                    </li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Picture
                                        Archiving and
                                        Communication System (PACS)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Pendaftaran
                                        Online
                                    </li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laboratorium
                                        Informasi
                                        System (LIS)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Pendaftaran
                                        Pasien
                                        Online Mandiri</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Pencegahan dan
                                        Pengendalian Infeksi (PPI)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Perbaikan Mutu
                                        dan
                                        Keselamatan Pasien (PMKP)</li>
                                </ul>
                                <div class="container-line">
                                    <div class="center-line"></div>
                                </div>
                                <div class="button">
                                    <button><i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>Pelajari
                                        Lanjut</button>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="product">
                        <article>
                            <img src="{{ asset('assets/img/produk-2.png') }}" alt="" />
                            <div class="layer">
                                <h2>RME NCI MediSmart</h2>
                                <h3>Rekam Medis Elektronik</h3>
                                <p>
                                    Dikembangkan dengan sistem modular, proses implementasi dilakukan bertahap dan
                                    terintegrasi antar modul.Mengelola aktivitas kegiatan dari Front Office sampai
                                    dengan
                                    Back Office, menghasilkan pelaporan secara lengkap dan cepat
                                </p>
                                <ul>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Terintegrasi
                                        dengan
                                        SIMRS</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Sistem
                                        berbasis web
                                        dan mobile</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Kesesuaian
                                        dengan PMK
                                        No 24 Tahun 2022</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Siap integrasi
                                        dengan
                                        sistem SatuSehat</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Fitur
                                        pelayanan medis
                                        dan keperawatan</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Sistem
                                        pelaporan
                                        lengkap </li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Tanda tangan
                                        digital
                                    </li>
                                </ul>
                                <div class="container-line">
                                    <div class="center-line"></div>
                                </div>
                                <div class="button">
                                    <button><i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>Pelajari
                                        Lanjut</button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                </article>
            </main>

        </div>
    </div>
    {{-- Our Product End --}}

    {{-- Video View --}}
    <div id="video-view">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h1>Bersama Membangun Layanan Kesehatan Dalam Era Revolusi Industri 4.0</h1>
                    <p>NCI-MediSmart memberikan solusi bagi fasilitas kesehatan Indonesia untuk bertransformasi dengan
                        layanan digital dan teknologi terbarukan untuk mendukung fasilitas kesehatan mencapai hasil
                        terbaik dengan skala yang besar.</p>
                </div>
                <div class="video">
                    <video src="{{ asset('assets/vid/dummy.mp4') }}" controls muted></video>
                </div>
            </div>
        </div>
    </div>
    {{-- Video View End --}}

    {{-- Blog --}}
    {{-- <div id="blog">
        <div class="container">
            <h1 class="sub-title">News & Update</h1>
                <main class="grid">
                    <div class="product-list">
                        <div class="news-update">
                         <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="" >
                                <div class="content">
                                    <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                    <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan keputusan, 
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                    </p>
                                </div>
                                <a href="#">Pelajari Lanjut</a>
                            </div>
                        </article>
                <div class="news-update">
                    <article>
                        <img src="{{ asset('assets/img/produk-2.png') }}" alt="">
                            <div class="content">
                               <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                               <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                  dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan keputusan, 
                                  akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                              </p>
                         </div>
                    <a href="#">Pelajari Lanjut</a>
                 </div>
                </article>
                <div class="news-update">
                    <article>
                        <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan keputusan, 
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                    </article>
                </div>
                <div class="news-update">
                    <article>
                        <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan keputusan, 
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                    </article>
                    <a href="#">Pelajari Lanjut</a>
                </div>
                    <div class="news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan keputusan, 
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                        </article>
                        <a href="#">Pelajari Lanjut</a>
                    </div>
            </main> 
        </div>
    </div> --}}
    <div id="blog">
        <div class="container">
            <h1 class="sub-title">News & Update</h1>
            {{-- <div class="corausel"> --}}
            <main class="swiper mySwiper grid">
                <div class="swiper-wrapper product-list">
                    <div class="swiper-slide news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan
                                    keputusan,
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                    </div>
                    </article>
                    <div class="swiper-slide news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan
                                    keputusan,
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                        </article>
                    </div>
                    <div class="swiper-slide news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan
                                    keputusan,
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                        </article>
                    </div>
                    <div class="swiper-slide news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan
                                    keputusan,
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                        </article>
                    </div>
                    <div class="swiper-slide news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan
                                    keputusan,
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                        </article>
                    </div>
                    <div class="swiper-slide news-update">
                        <article>
                            <img src="{{ asset('assets/img/produk-1.png') }}" alt="">
                            <div class="content">
                                <h2>Pengalam Kami dalam mengggunakan SIM-RS NCI MediSmart</h2>
                                <p>Manfaat yang saya rasakan sebagai Direktur Rumah Sakit Al-Islam Bandung
                                    dengan penggunaan SIMRS NCI-Medismart diantaranya adalah kecepatan dalam pengambilan
                                    keputusan,
                                    akurasi dalam mengidentifikasi masalah, kemudahan menyususn strategi...
                                </p>
                            </div>
                            <a href="#">Pelajari Lanjut</a>
                        </article>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </main>
            {{-- </div> --}}
        </div>
    </div>
    {{-- Blog End --}}

    {{-- Footer --}}
    {{-- Footer --}}
    <div class="footer">
        <img src="{{ asset('assets/img/Logo NCI.png') }}" alt="Logo">
        <div class="footer-text">
            <p>
                Copyright © 2023 PT NUANSA CERAH INFORMASI
            </p>
        </div>
    </div>
    {{-- Footer End --}}
    {{-- Swiper JS --}}
    <script src="{{ asset('Js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('Js/Script.js') }}"></script>
</body>

</html>
