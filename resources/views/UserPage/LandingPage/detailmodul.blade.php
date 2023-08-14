<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Modul - NCI Medismart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- Header --}}
    <header class="header">
        @include('UserPage.Layouts.navbar')
    </header>\
    {{-- End Header --}}

    {{-- Content --}}
    <div class="gradient-container">
        <div class="judul">
        <h1><b>V-Claim / BPJS Claim</b></h1>
        <p>BPJS Claim System merupakan Software Aplikasi Bridging <br>
           antara SIM RS dengan Aplikasi INA CBGs untuk claim BPJS, <br>
           membantu RS memberikan kemudahan melakukan <br>
            bridging SIM RS dengan aplikasi claim BPJS</p>
            <br>
            <button class="button1"><b>Hubungi Kami</b></button>
        </div>
        <img src="{{ asset('assets/img/Group 119.png') }}" alt="">
    </div>
    {{-- End Content --}}
    {{-- fitur --}}
    <div class="claim">
     <div class="col">
        <div class="bpjs">
            <p><b>V-Claim / BPJS Claim</b></p>
        </div>
     </div> 
     <div class="container">
        <div class="fitur">
            <div class="fitur-card">
                <img src="{{ asset('assets/img/Vector1.png') }}" alt="warning-shield" width="100"
                    height="100">
                        <h2>Import Data Pelayanan dari SIM RS</h2>    
                        <p> Terintegrasi dengan data pasien dari RWJ, RWI, atau IGD</p>
                
            </div>
            <div class="fitur-card">
                <img src="{{ asset('assets/img/Vector2.png') }}" alt="profesional" width="100"
                    height="100">
                <h2>Export data ke aplikasi klaim BPJS (INA-CBGs)</h2>
                <p>
                   Laporan data dengan format .txt untuk integrasi ke aplikasi INA-CBGs.
                </p>
            </div>
            <div class="fitur-card">
                <img src="{{ asset('assets/img/Vector3.png') }}" alt="chess" width="100" height="100">
                <h2>Cek data hasil export pada aplikasi INA-CBGs Kemenkes</h2>
                <p>
                    Pengecekan data peserta BPJS dan rujukan pasien
                </p>
            </div>
        </div>
    </div>
    </div>
    {{-- End Fitur --}}
    {{-- Fasilitas --}}
    <div class="fasilitas">
        <p><b> Fasilitas V-Claim / BPJS Claim</b></p>
    </div>
    <div class="fasilitas-container">
        <img src="{{ asset('assets/img/Group 120.png') }}" alt="">
        <div class="detail-fasilitas">
            <ul>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Import data pelayanan Pasien</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Integrasi proses, grouper tarif dengan software INA-CBGs</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Setup ICD IX</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan Rekap Biaya Pelayanan vs Tarif INA-CBGs</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan jasa medis dan Paramedis</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan perbandingan SEP dan Claim</li>
            </ul>
        </div>
    </div>
    <div class="fasilitas-container">
        <div class="detail-fasilitas">
            <ul>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Verifikasi Data Pasien</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Setup ICD X</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan Klaim per Pasien</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan Rekap Claim BPJS</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan Rekapitulasi Tarif Per Pasien</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Rekap Claim BPJS-Rawat Jalan</li>
                <li><i class="fa-solid fa-circle-check" style="color: #1bad4b;"></i>Laporan Individual Pasien</li>
            </ul>
        </div>
        <img src="{{ asset('assets/img/Group 121.png') }}" alt="">
    </div>
    {{-- End Fasilitas --}}
    {{-- Carousel Slide --}}
    <div class="header-carousel">
        <p>Apa kata <b>Client</b> tentang <b>Kami</b></p>
    </div>
     <div class="carousel-container">
        <div class="carousel-slide" id="carouselSlide">
            <div class="carousel-item-2">
                <img src="{{ asset('assets/img/logo_rs_1.png') }}" alt="logo-1">
                <div class="carousel-content">
                    <p class="carausel-title">RSU Bhakti Asih</p>
                    <p class="carousel-text">"Mudah digunakan (User friendly), sangat membantu dalam proses pencatatan,
                                              pencarian dan pelapora. Support personil site dan dukungan purna jual dari kantor
                                              pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"</p>
                </div>
            </div>
            <div class="carousel-item-2">
                <img src="{{ asset('assets/img/logo_rs_1.png') }}" alt="logo-1">
                <div class="carousel-content">
                    <p class="carausel-title">RSU Bhakti Asih</p>
                    <p class="carousel-text">"Mudah digunakan (User friendly), sangat membantu dalam proses pencatatan,
                                              pencarian dan pelapora. Support personil site dan dukungan purna jual dari kantor
                                              pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"</p>
                </div>
            </div>
            <div class="carousel-item-2">
                <img src="{{ asset('assets/img/logo_rs_1.png') }}" alt="logo-1">
                <div class="carousel-content">
                    <p class="carausel-title">RSU Bhakti Asih</p>
                    <p class="carousel-text">"Mudah digunakan (User friendly), sangat membantu dalam proses pencatatan,
                                              pencarian dan pelapora. Support personil site dan dukungan purna jual dari kantor
                                              pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"</p>
                </div>
            </div>
            <div class="carousel-item-2">
                <img src="{{ asset('assets/img/logo_rs_1.png') }}" alt="logo-1">
                <div class="carousel-content">
                    <p class="carausel-title">RSU Bhakti Asih</p>
                    <p class="carousel-text">"Mudah digunakan (User friendly), sangat membantu dalam proses pencatatan,
                                              pencarian dan pelapora. Support personil site dan dukungan purna jual dari kantor
                                              pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"</p>
                </div>
            </div>
            <div class="carousel-item-2">
                <img src="{{ asset('assets/img/logo_rs_1.png') }}" alt="logo-1">
                <div class="carousel-content">
                    <p class="carausel-title">RSU Bhakti Asih</p>
                    <p class="carousel-text">"Mudah digunakan (User friendly), sangat membantu dalam proses pencatatan,
                                              pencarian dan pelapora. Support personil site dan dukungan purna jual dari kantor
                                              pusat, sangat membantu rumah sakit dalam memberikan usulan solusi dari setiap permasalahan"</p>
                </div>
            </div>
        </div>
     </div>

   
     
     <script>
        const carouselSlide = document.getElementById('carouselSlide');
        const carouselItems = carouselSlide.getElementsByClassName('carousel-item-2');
        let currentIndex = 0;

        function moveCarousel() {
        const slidePosition = -currentIndex * (carouselItems[0].offsetWidth + 10);
        carouselSlide.style.transform = `translateX(${slidePosition}px)`;
        }

        function nextSlide() {
        currentIndex++;
        if (currentIndex >= carouselItems.length - 2) {
            currentIndex = 0;
         }
        moveCarousel();
        }

        // Mengatur interval untuk berganti slide setiap 3 detik
        setInterval(nextSlide, 5000);
     </script>
    {{-- End Carousel Slied --}}
    {{-- Konsultasi --}}
    <div class="bg-konsul">
        <div class="bg">
            <div class="foto">
                <div class="foto-bg">
                <img src="{{ asset('assets/img/Group 122.png') }}" alt="">
                </div>
            <div class="pertanyaan">
                    <h2>Memiliki pertanyaan terkain SIMRS NCI - Medismart?</h2>
                    <div class="copyright">
                        <p>Diisi dengan copyright </p>
                        <button class="btn-konsul">Konsultasi</button>
                    </div>
            </div>
        </div>
        </div>
    </div>


    {{-- END Konsultasi --}}
    <footer>
        @include('UserPage.Layouts.footer')
    </footer>
</body>
<script src="{{ asset('Js/Script.js') }}"></script>
</html>