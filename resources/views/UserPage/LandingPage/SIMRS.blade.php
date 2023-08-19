<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style-SIMRS.css') }}">
        {{-- Swiper js --}}
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <title>SIM-RS</title>
    </head>
    <body>
        {{-- navbar --}}
        <header class="header">
            @include('UserPage.Layouts.navbar')
        </header>
        {{-- end navbar  --}}
        {{-- section header --}}
        <div class="container-SIMRS">
            <img class="logo-SIMRS" src="{{ asset('assets/img/Medismart Logo.png') }}" alt="">
            <div class="des">
                <p>SIMRS Medismart merupakan Sistem Informasi Manajemen Rumah Sakit yang sudah ada sejak tahun 1991 <br> dan terus dilakukan pembaharuan terkait dengan perkembangan teknologi dan regulasi, sehingga dapat  <br>menyesuaikan dengan kebutuhan Rumah Sakit sebagai pengguna SIMRS. 
                </p>
            </div>
            <button class="hubungi">Hubungi Kami</button>
            <button class="download">Download Flayer</button>
            <div class="screen">
                <div class="vidio">
                    <iframe width="1000" height="700" src="https://www.youtube.com/embed/65pOIFtQUyg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen controls muted></iframe>
                    {{-- <video src="{{ asset('assets/vid/dummy.mp4') }}" controls muted></video> --}}
                </div>
            </div>
            {{-- End section header --}}
            {{-- Section mitra --}}
        </div>
        <div class="gradient">
            <div class="mitra">
                <h1>Mitra SIMRS NCI - Medismart</h1>
                <div class="container-client-SIMRS">
                    <img class="client-SIMRS" src="{{ asset('assets/img/Client.png') }}" alt=""> 
                </div>
            </div>
        </div>
        {{-- End section mitra --}}
        {{-- Section Kelebihan --}}
        <div class="header-kelebihan">
            <h1>Kelebihan SIMRS NCI - Medismart</h1>
        </div>
        <div class="card-kelebihan">
            <div class="kelebihan-content">
                <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                
                <p class="kelebihan-title"><b>Teknologi</b></p>
                <ul>
                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Multi Operating System 
                        (Windows, Linux)</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Multiplatform
                            (Dekstop, Web based, Android)
                        </li>
                        <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Teknologi LIS dan PACS 
                        </li>
                        <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Picture
                            Teknologi Barcode & RFID</li>
                        </ul>
                        <br>
                        <br>
                        
                    </div>
                    <div class="kelebihan-content">
                        <img src="{{ asset('assets/img/VectorGear.png') }}" alt="">
                        <div class="deskripsi">
                            <p class="kelebihan-title"><b>Integrasi</b></p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi modul layanan front office – Back Office</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi BPJS & V-Claim 
                                </li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi LIS dab PACS
                                </li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi Pendaftaran Online Mandiri – SIMRS</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi Aplikasi</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>KEMENKES (SISRUTE, SIRANAP)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="kelebihan-content">
                        <img src="{{ asset('assets/img/VectorPuzzel.png') }}" alt="">
                        <div class="deskripsi">
                            <p class="kelebihan-title"><b>Modular</b></p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Pembangunan SIMRS bertahap </li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Kepastian pemanfaatan sistem 
                                </li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Validitas dan kelengkapan laporan 
                                </li>
                                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Resiko kegagalan sistem minim</li>
                </ul>
            </div>
        </div>
        <div class="kelebihan-content">
            <img src="{{ asset('assets/img/VectorDeal.png') }}" alt="">
            <div class="deskripsi">
                <p class="kelebihan-title"><b>Purna Jual</b></p>
                <ul>
                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Tim implementasi yang berpengalaman</li>
                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Layanan konsultasi & Maintenance 
                    </li>
                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Berpengalaman di RS 
                    </li>
                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Daerah & Swasta</li>
                    <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Populasi customer lebih dari 80 rumah sakit</li>
                    
                </ul>
            </div>
        </div>
    </div>
    {{-- End Section Kelebihan --}}
    {{-- Section 3 --}}
    <div class="container-sec3">
        <div class="bg-sec3">
            <div class="foto-bg-sec3">
                <img src="{{ asset('assets/img/Group 125.png') }}" alt=""> 
                <div class="ket-sec3">
                <p><b>NCI - Medismart Didesain dan dikembangkan dengan berbagai fasilitas untuk memberikan kemudahan, kecepatan dan keakuratan proses Manajemen Rumah Sakit.</b></p>
                </div>
            </div>
        </div>
    </div>
    {{-- End Section 3 --}}
    {{-- <div class="modul"> --}}
        <div class="header-modul">
            <h1>Modul SIMRS NCI - Medismart</h1>
        </div>
        <div class="slug-modul">
            <p>Dikembangkan dengan sistem modular, proses implementasi dilakukan bertahap<br> dan terintegrasi antar modul.Mengelola aktivitas kegiatan dari Front Office <br> sampai dengan Back Office, menghasilkan pelaporan secara lengkap dan cepat
            </p>
        </div>
        <div class="container-card">
            <div class="row">
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="/detailmodul"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
            <div class="card-modul-container">
             <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
             </div>
            </div>
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
            <div class="card-modul-container">
            <div class="card-modul">
                <h3>Nama Produk Modul</h3>
                <div class="card-modul-img">
                    <img src="{{ asset('assets/img/Vector.png') }}" alt="">
                </div>
                <p>Diisi caption singkat tentang modul terkait</p>
                <a href="#"> Pelajari Lebih Lanjut</a>
            </div>
            </div>
        </div>
        </div>
        <div class="btn-modul">
            <button class="button-pelajar-modul">Lihat Semua Modul</button>
        </div>
    </div>
    {{-- carousel --}}
    <div id="carousel-client">
        <div class="container-client">
            <p class="head-title">
                Apa kata <b>Client</b> tentang <b>Kami</b>
            </p>
        </div>
        <div class="swiper-client swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slider">
                    <div class="card-client">
                        <img src="{{ asset('assets/img/logo-rs-1.png') }}" alt="">
                        <p class="review">
                            "Mudah digunakan (user friendly), sangat membantu dalam proses pencatatan, pencarian dan pelaporan. Support personil site dan dukungan purna jual dari kantor pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"
                        </p>
                    </div>
                </div>
                <div class="swiper-slider">
                    <div class="card-client">
                        <img src="{{ asset('assets/img/logo-rs-1.png') }}" alt="">
                        <p class="review">
                            "Mudah digunakan (user friendly), sangat membantu dalam proses pencatatan, pencarian dan pelaporan. Support personil site dan dukungan purna jual dari kantor pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"
                        </p>
                    </div>
                </div>
              
        
            </div>
            <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        {{-- <div class="swiper slider-container-client ">
            <div class="slide-content-client">
                <div class="swiper-wrapper card-wrapper-client">
                    <div class=" swiper-slide card-client">
                        <div class="image-client ">
                            <div class="card-img-client">
                                <img src="{{ asset('assets/img/logo-rs-1.png') }}" alt="" class="client-img">
                            </div>
                            <p class="review">
                                "Mudah digunakan (user friendly), sangat membantu dalam proses pencatatan, pencarian dan pelaporan. Support personil site dan dukungan purna jual dari kantor pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
         --}}
         {{-- <div class="client-container swiper">
            <div class="client-content">
                <div class="client-wrapper swiper-wrapper">
                    <div class="card-client swiper-slide">
                        <div class="img-client">
                            <div class="card-img-client">
                                <img src= "{{ asset('assets/img/logo-rs-1.png') }}" alt="" class="client-img">
                            </div>
                        </div>
                        <div class="client-content">
                            <p class="review">
                                "Mudah digunakan (user friendly), sangat membantu dalam proses pencatatan, pencarian dan pelaporan. Support personil site dan dukungan purna jual dari kantor pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"
                            </p>
                        </div>
                    </div>
                    <div class="card-client swiper-slide">
                        <div class="img-client">
                            <div class="card-img-client">
                                <img src="" {{ asset('assets/img/logo-rs-1.png') }}" alt="" class="client-img">
                            </div>
                        </div>
                        <div class="client-content">
                            <p class="review">
                                "Mudah digunakan (user friendly), sangat membantu dalam proses pencatatan, pencarian dan pelaporan. Support personil site dan dukungan purna jual dari kantor pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         </div> --}}
         
    </div>
    {{-- end carousel --}}
    {{-- footer --}}
    {{-- <footer class="footer">
        @include('UserPage.Layouts.footer') --}}
    {{-- End Header --}}
</body>
<script src="{{ asset('Js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('Js/Script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</html>