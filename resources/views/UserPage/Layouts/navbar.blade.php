<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- Header --}}
    <header class="header">
        <div class="top-bar">
            <div class="top-bar-content">
                <div class="left-content">
                    <div class="instagram">
                        <a href="https://www.instagram.com/ncimedismart/" target=”_blank”><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="youtube">
                        <a href="https://www.youtube.com/@simrsncimedismart2282/featured" target=”_blank”><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/company/pt-nuansa-cerah-informasi/" target=”_blank”><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="right-content">
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <span>022 8735 6050</span>
                    </div>
                    <div class="location">
                        <button>Kantor Bandung</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-bar">
            <div class="bottom-bar-content">
                <a href="#" class="logo"><img src="{{ asset('assets/img/Logo Medismart.png') }}" alt="Medismart"
                        class="logo" /></a>

                <nav class="navbar">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="" class="nav-link">Produk <span>&#x25BE;</span></a>
                            <ul class="nav-list-2">
                                <li class="nav-item"><a href="#" class="nav-link"><b>SIMRS NCI MEDISMART</b></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><b>RME NCI MEDISMART</b></a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Tentang Kami <span>&#x25BE;</span></a>
                            <ul class="nav-list-2">
                                <li class="nav-item"><a href="/HealthcareSolution" class="nav-link">Healthcare Solution</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">PT Nuansa Cerah Informasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Testimoni</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Demo</a></li>
                        <li class="nav-item"><a href="" class="btn-contact">Hubungi Kami</a></li>
                        <a href="" class="menu"><i class="fa-solid fa-bars" style="color: #015028;"></i></a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    {{-- End Header --}}
</body>

</html>
