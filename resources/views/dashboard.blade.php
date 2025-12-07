
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>dashboard</title>
</head>
<body>
    <!-- navbar-->
    <div class="navbar" id="navbar">
        <img src="/img/logo.png" class="logo">
        <a href="{{route('dashboard')}}" class="navbar-nav">home</a>
        <a href="#about" class="navbar-nav">about us</a>
        <a href="#service" class="navbar-nav">service</a>
        <a href="#" class="navbar-nav">location</a>
        <a href="#contact" class="navbar-nav">contact</a>
        <button type="submit" class="navbar-nav" style="color :black ">book now</button>
    </div>

    <!-- dashboard utama-->
    <div class="dashboard">
        <div class="container-kiri">
            <h1>Layanan Profesional <br> Langsung ke Rumah Anda!</h1>
            <p>Praktis, Cepat, & Terpercaya<br> Cukup Pesan Dari Rumah <br>Kami Datang Membantu Anda</p>
            <div class="tombolhero">
                <button class="btn-start">Get Started ></button>
                <button type="submit" name="nomor-admin" class="btn-no-admin"><img src="/img/telpon.png">088269436198</button>
                <a href="{{route('keranjang.index')}}" class="keranjang"><img src="/img/Fast Cart.png"></a>
            </div>
        </div>

        <div class="container-kanan">
            <img src="/img/heroimage.png" class="hero-image">
        </div>
    </div>

    <!--about-->
    <div class="container-about" id="about">
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

    <!--service-->

    <div class="service" id="service">
        <h1>Services</h1>
        <p>Layanan Kebersihan Yang Kami Sediakan:</p>
        <div class="container-img">
    @foreach ($services as $service)
        <a href="{{ route('service.detail', $service->id) }}" class="img1">
            <img src="{{ asset('img/' . $service->gambar) }}" alt="{{ $service->nama_layanan }}">
        </a>
    @endforeach
</div>


        <p class="tagline">Dengan tenaga profesional dan peralatan modern,<br>kami memastikan hasil kerja yang cepat, bersih, dan memuaskan.</p>

    </div>

    <!--contact-->

    <div class="contact" id="contact">
    <div class="container-kiri">
        <h1>Contact Us</h1>
        <p>Ada pertanyaan atau ingin memesan layanan?<br>Silakan hubungi kami melalui:</p>
        <div class="link-contact">
            <a href="#"><img src="/img/WhatsApp.png">WhatsApp / Telepon: 089531919146</a>
            <a href="#"><img src="/img/Email.png">Email: @panggil_aja</a>
            <a href="#"><img src="/img/Google Maps Old.png">Alamat: Jambi, Mendalo Darat</a>
        </div>
        <p>Atau isi formulir kontak di samping ini!<br>Tim kami akan segera merespons dan <br>membantu Anda mendapatkan layanan terbaik!</p>

    </div>
    <div class="container-kanan">
        <form action="" method="" class="bootstrap-scope">
        <div class="form-floating ">
            <input type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatinginput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatinginput">No Hp</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatinginput">Pesan</label>
        </div>
       <button type="submit" class="btn-message">Submit</button>

        </form>

    </div>
    </div>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 10) {
                 navbar.classList.add("scrolled");
            } else {
                 navbar.classList.remove("scrolled");
                }
        });

    </script>


</body>
</html>
