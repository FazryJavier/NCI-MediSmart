<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Form Demo - NCI Medismart</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- partial:index.partial.html -->
    <header class="header">
        <nav class="navbar">
            <div class="navbar-content">
                <div class="left-content">
                    <div class="logout">
                        <button class="btn default">< Kembali</button>
                    </div>
                </div>
                <div class="right-content">
                    <a href="/" class="logo"><img src="{{ asset('assets/img/Logo Medismart.png') }}" alt="Medismart"
                    class="logo" /></a>
                </div>
            </div>
        </nav>
    </header>    
    <div class ="login-page">
        <a href="/" class="logo"><img src="{{ asset('assets/img/Logo Medismart.png') }}" alt="Medismart"class="logo" /></a>
        <h5>Jadwalkan demo dengan tim kami.</h5>
    </div>
    <form>
        <ul class="form-style-1">
        <li>
            <label>Nama <span class="required">*</span></label>
            <input type="text" name="field1" class="field-long"/>
        </li>
        <li>
            <label>Jabatan <span class="required">*</span></label>
            <input type="text" name="field2" class="field-long"/>
        </li>
        <li>
            <label>Nama Instansi <span class="required">*</span></label>
            <input type="email" name="field3" class="field-long" />
        </li>
        <li>
            <label>Alamat instansi <span class="required">*</span></label>
            <input type="text" name="field4" class="field-long"/>
        </li>
        <li>
            <label>Email <span class="required">*</span></label>
            <input type="text" name="field5" class="field-long"/>
        </li>
        <li>
            <label>No Telepon <span class="required">*</span></label>
            <input type="text" name="field6" class="field-long"/>
        </li>
        <li>
            <input type="submit" value="Jadwal Demo"/>
        </li>
    </ul>
    </form>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
</body>
    <footer>
        <div class="lower-footer">
            <div class="col-2">
                <p>
                    Copyright © 2023 PT NUANSA CERAH INFORMASI
                </p>
            </div>
        </div>
    </footer>
</html>
