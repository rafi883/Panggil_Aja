@extends('layouts.app')

@section('content')
<style>
body{

   margin:0;
   height: 100vh;
   margin-left:0;
   margin-right: 4rem;
   font-family: "Podkova", serif;
   background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/background-web-panggil-aja.png);
   align-content: center;
   background-repeat: no-repeat;
   background-size: cover;
   justify-content: center;
}

.detail-pesanan-user p{
   display: flex;
   flex-direction: column;
}
   .btn-kembali {
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

.btn-kembali:hover {
    background-color: #333;
}

.info-pesanan-utama{
    display: flex;
    justify-content: space-between;
    align-items:center;
    border-color: solid black;
    margin-left: 0;
    color: white;
    height: 15vh;
    font-family: "Podkova", serif;
    font-size: larger;
    font-weight: bold;
    background-color:rgba(255, 255, 255, 0.4) ;
    -webkit-backdrop-filter: blur(3px);
    backdrop-filter: blur(3px);
    padding-right: 5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 5rem;
    width: 80vw;
    border-bottom-right-radius: 40px;
    border-top-right-radius: 40px;
}
.detail-pesanan-user h1{
    color: white;
    margin-left: 2rem;
}
.container-pesanan{
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-content: center;
    gap:1rem;
}

.info-pesanan{
    justify-self: center;
    align-self: center;
    outline: none;
    transition: background-color 0.3s ease;
}
.info-pesanan select{
    padding: 5px;
    width: 13vw;
    height: 6vh;
    border: none;
    background-color: transparent;
    border-radius: 6px;
    cursor: pointer;
}
.info-pesanan[data-status="todo"] {
    background-color: #f0ad4e; /* Oranye */
    color: white;
    border: none;
    outline: none;
    border-radius: 6px;
}

.info-pesanan[data-status="doing"] {
    background-color: #5bc0de; /* Biru */
    color: white;
    border-radius: 6px;
    border: none;
    outline: none;
}

.info-pesanan[data-status="done"] {
    background-color: #5cb85c; /* Hijau */
    color: white;
    border-radius: 6px;
    border: none;
    outline: none;
}

.info-pesanan[data-status="cancel"] {
    background-color: #ff2a2a; /* Oranye */
    color: white;
    border-radius: 6px;
    border: none;
    outline: none;
}
.pesanan .gmbr-kiri{
    display: flex;
    gap:20px;
    color: white;
    font-family: "Podkova", serif;
    font-size: larger;
    font-weight: bold;

}

.gmbr-kiri img{
    width: 15h;
    height: 15vh;

}
</style>
<div class="detail-pesanan-user">
    <h1>Detail Pesanan</h1>

    {{-- Informasi Pesanan --}}
    <div class="info-pesanan-utama">
        <p><strong>ID Pesanan:</strong> {{ $order->id }}</p>
        <p><strong>Tanggal:</strong> {{ $order->created_at->format('d M Y H:i') }}</p>
        <p><strong>Status:</strong> <span class="status-badge" data-status="{{ $order->status }}">{{ ucfirst($order->status) }}</span></p>
        <p><strong>Total Harga:</strong> Rp {{ number_format($order->total_price,0,',','.') }}</p>
    </div>

    {{-- Daftar Item --}}
    <div class="container-pesanan">
        @foreach($orderItems as $item)
        <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="{{ $item->service->gambar }}" alt="{{ $item->service->nama_service }}">
                <p>{{ $item->service->nama_service }}</p>
            </div>


        </div>
        @endforeach
    </div>

    <div class="text-end mt-3">
        <a href="{{ route('dashboard') }}" class="btn-kembali">Kembali ke Dashboard</a>
    </div>
</div>

@endsection
