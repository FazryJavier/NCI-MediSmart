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
    <footer>
        <div class="upper-footer">
            <div class="left">
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
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div class="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="column col-1">
                    <p><b>NCIMEDISMART</b></p>
                    <ul>
                        <li><a href="">Layanan</a></li>
                        <li><a href="">Fitur</a></li>
                    </ul>
                </div>
                <div class="column col-2">
                    <p><b>Solusi</b></p>
                    <ul>
                        <li><a href="">SIMRS NCI MEDISMART</a></li>
                        <li><a href="">RME NCI MEDISMART</a></li>
                    </ul>
                </div>
                <div class="column col-3">
                    <p><b>Perusahaan</b></p>
                    <ul>
                        <li><a href="">Informasi Perusahaan</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="lower-footer">
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
