<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Admin - NCI Medismart</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
<a href="/" class="logo"><img src="{{ asset('assets/img/Logo Medismart.png') }}" alt="Medismart"class="logo" /></a>
  <div class="form">
    <form class="login-form">
      <li>
        <label>Username <span class="required">*</span></label>
        <input type="text"/>
      </li>
      <li>
        <label>Password <span class="required">*</span></label>
        <input type="password"/>
      </li>
      <button>login</button>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>