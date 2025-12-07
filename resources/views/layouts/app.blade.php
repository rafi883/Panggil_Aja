<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Panggil Aja- @yield('title')</title>
    <!-- Tautan CSS, misal: -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/detailPesanan.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <header>
        {{-- <nav>
            <!-- Menu Navigasi Anda -->
        <div class="navbar">
        <img src="/img/logo.png" class="logo">
        <a href="#" class="navbar-nav">home</a>
        <a href="#" class="navbar-nav">about us</a>
        <a href="#" class="navbar-nav">service</a>
        <a href="#" class="navbar-nav">location</a>
        <a href="#" class="navbar-nav">contact</a>
        <button type="submit" class="navbar-nav" style="color :black ">book now</button> --}}
    </div>
        </nav>
    </header>

    <main>
        <!-- Di sinilah konten unik dari setiap halaman akan dimasukkan -->
        @yield('content')
    </main>



    <!-- Tautan JS, misal: -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
