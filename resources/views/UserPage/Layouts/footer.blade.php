<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- Footer --}}
    <footer class="footer">
        <div class="top-footer">
            <div class="footer-content">
                <img src="{{ asset('assets/img/white-logo.png') }}" alt="Logo">
                <div class="text-1">
                    <p><b>HEAD OFFICE</b></p>
                    <p>Jl. Wayang No.28B, Malabar, Kec. Lengkong,</p>
                    <p>Kota Bandung, Jawa Barat 40262</p>
                    <p>Phone. 022-87356050</p>
                </div>
                <div class="text-2">
                    <p><b>BRANCH OFFICE</b></p>
                    <p>Jl. Ketintang Baru Selatan I No. 16</p>
                    <p>Blok D.30 Surabaya</p>
                    <p>Phone. (031) 8298153</p>
                    <p>Fax. (031) 82989153</p>
                </div>
                <div class="text-3">
                    <div class="instagram">
                        <a href="https://www.instagram.com/ncimedismart/" target=”_blank”><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="youtube">
                        <a href="https://www.youtube.com/@simrsncimedismart2282/featured" target=”_blank”><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/company/pt-nuansa-cerah-informasi/" target=”_blank”><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-content">
                <h4><b>NCIMEDISMART</b></h4>
                <ul>
                    <li><a href="">Layanan</a></li>
                    <li><a href="">Fitur</a></li>
                </ul>
            </div>

            <div class="footer-content">
                <h4><b>Solusi</b></h4>
                <ul>
                    <li><a href="">SIMRS NCI MEDISMART</a></li>
                    <li><a href="">RME NCI MEDISMART</a></li>
                </ul>
            </div>

            <div class="footer-content">
                <h4><b>Perusahaan</b></h4>
                <ul>
                    <li><a href="">Informasi Perusahaan</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="col-1">
                <img src="{{ asset('assets/img/Logo NCI.png') }}" alt="Logo">
            </div>
            <div class="col-2">
                <p>
                    Copyright © 2023 PT NUANSA CERAH INFORMASI
                </p>
            </div>
            <div class="col-3"></div>
        </div>
    </footer>
    {{-- End Footer --}}
</body>

</html>
