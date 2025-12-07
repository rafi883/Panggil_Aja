<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>About us</title>
</head>
<body>

    <!-- navbar-->
    <div class="navbar">
        <img src="/img/logo.png" class="logo">
        <a href="{{route('dashboard')}}" class="navbar-nav">home</a>
        <a href="#" class="navbar-nav">about us</a>
        <a href="#" class="navbar-nav">service</a>
        <a href="#" class="navbar-nav">location</a>
        <a href="#" class="navbar-nav">contact</a>
        <button type="submit" class="navbar-nav" style="color :black ">book now</button>
    </div>

    <div class="container-about">
    <div class="containerKiri">
         <img src="/img/aboutimg.png">
    </div>

    <div class="containerKanan">
        <h3>About Us</h3>
        <h1>Home Service</h1>
        <h3 class="tagline">Memberikan layanan terbaik dengan hasil <br>bersih, rapi, dan nyaman.<br>Memastikan setiap sudut ruangan anda<br>terlihat segar dan higienis.<br>Kepuasan Anda adalah prioritas utama kami!</h3>
        <div class="button-contKanan">
            <button>Read More ></button>
            <div class="img-follower">
                <img src="/img/imgfollower.png">
                <a href="#" style="text-decoration: none; color: white;">@panggil_aja<br>2346 Followers</a>
            </div>
         </div>

    </div>

    </div>
</body>
</html>
