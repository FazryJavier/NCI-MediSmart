<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Modul - NCI Medismart</title>
</head>
<body>
    <header class="header">
        @include('UserPage.Layouts.navbar')
    </header>
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
</body>
</html>