<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

    <link rel="stylesheet" href="/css/keranjang.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <a href="{{ route('dashboard') }}"class="btn-back">⬅ Kembali</a>
<div class="keranjang">

    <div class="container-kiri">
        <h1>Pesanan:</h1>

        {{-- LOOP DATA CART --}}
        @foreach($carts as $cart)
            <div class="gmbr-pesanan">
                <img src="{{ asset('img/' . $cart->service->gambar) }}" alt="" style="width:100px; height:120px; object-fit:cover;">
                <p>{{ $cart->service->nama_layanan }}</p>
                <p>Rp {{ number_format($cart->service->harga, 0, ',', '.') }}</p>

            </div>
        @endforeach


    </div>



    <div class="container-kanan">
        <h1>Checkout</h1>
        <p>Masukkan Email Anda. Email Ini Akan Mengirimmu Status Pesananmu</p>

        <form action="{{ route('checkout.process') }}" method="post">
            @csrf

            <input class="input-email" type="email" placeholder="Email" name="email" required>

            <div>
                <input type="checkbox"> Saya Setuju dengan Syarat & Ketentuan
            </div>

            <button type="submit" class="btn-checkout">checkout</button>
            <button type="button">metode pembayaran</button>
            <a href="{{route('detail.pesanan')}}" class="btn-detailPesanan">Detail pesanan</a>
        </form>

        <ul>
            <h2>Langkah Selanjutnya<hr></h2>

            <p>Informasi Pembayaran</p>
            <li>Pilih Metode Pembayaran & Masukkan Rincian Pembayaran Anda</li>

            <p>Konfirmasi Dari Pihak Jasa</p>
            <li>Tunggu Konfirmasi Dari Pihak Kami dengan Menerima Email</li>
        </ul>
    </div>
</div>



</body>
</html>
