@extends('layouts.app')

@section('content')
<style>

    body {
    background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/background-web-panggil-aja.png)no-repeat center center fixed;
    background-size: cover;
}

    .service-detail-container {
        max-width: 900px;
        margin: 40px auto;
        margin-top: 10rem;
        padding: 20px;
        display: flex;
        gap: 30px;
        align-items: flex-start;
         background-color:rgba(255, 255, 255, 0.4) ;
        -webkit-backdrop-filter: blur(6px);
        backdrop-filter: blur(6px);
        border-radius: 30px;
         box-shadow: 0 8px 18px rgba(0, 0, 0, 0.35);
    }

    .service-detail-image img {
        width: 200px;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        
    }

    .service-detail-info {
        flex: 1;
    }

    .service-detail-info h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .service-price {
        font-size: 22px;
        font-weight: bold;
        color: solid black;
        margin-bottom: 15px;
    }

    .service-desc {
        font-size: 16px;
        line-height: 1.6;
        color: #444;
        margin-bottom: 25px;
    }

    .btn-add-cart {

        width:20vh;
        background-color: rgba(113, 230, 104, 1);
        color: #fff;
        text-align: center;
        justify-content: center;
        align-content: center;
        align-items: center;
        text-decoration: none;
        border: none;
        font-size: 16px;
        border-radius: 8px;
        transition: 0.3s ease;
    }

    .btn-add-cart:hover {
        background-color: #333;
    }

    @media(max-width: 768px) {
        .service-detail-container {
            flex-direction: column;
            text-align: center;
        }

        .service-detail-image img {
            width: 100%;
            height: auto;
        }
    }

    .btn-back {
    display: inline-block;
    padding: 10px 18px;
    background-color: rgba(113, 230, 104, 1);
    color: #fff;
    font-size: 15px;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s ease;
    margin-bottom: 20px;
}

.btn-back:hover {
    background-color: #333;
}

</style>

<div class="service-detail-container">

    <!-- Image -->
    <div class="service-detail-image">
        <img src="{{ asset('img/' . $service->gambar) }}"
             alt="{{ $service->nama_layanan }}">
    </div>

    <!-- Detail -->
    <div class="service-detail-info">
        <h2>{{ $service->nama_layanan }}</h2>

        <div class="service-price">
            Rp {{ number_format($service->harga, 0, ',', '.') }}
        </div>

        <p class="service-desc">
            {{ $service->deskripsi }}
        </p>

        <!-- Tombol Tambah ke Keranjang -->
        <form action="{{ route('cart.add', $service->id) }}" method="POST">
            @csrf
            <button class="btn-add-cart" type="submit">Keranjang</button>
        </form>

    </div>

</div>
<a href="{{ route('dashboard') }}"
   class="btn-back">
    ⬅ Kembali
</a>


@endsection
