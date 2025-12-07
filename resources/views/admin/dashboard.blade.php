@extends('layouts.app')

@section('content')

<div id="skeleton-loading" class="skeleton-wrapper">
    <div class="skeleton-card"></div>
    <div class="skeleton-card"></div>
    <div class="skeleton-card"></div>
</div>

<div id="real-content" style="display: none;">


<div class="admin-dashboard">
    <div class="dashboard-header">
        <h1>Dashboard Admin</h1>
        <div class="subtitle">Data pesanan terbaru</div>
    </div>

    <div class="order-grid">
        @foreach ($orders as $order)
            <div class="order-card">

                <div class="order-status
                    @if($order->status === 'tertunda') status-tertunda
                    @elseif($order->status === 'diproses') status-diproses
                    @elseif($order->status === 'selesai') status-selesai
                    @else status-dibatalkan
                    @endif
                ">
                    {{ $order->status }}
                </div>

                <div class="order-id">Order #{{ $order->id }}</div>
                <div class="order-user">{{ $order->user->email ?? 'Guest' }}</div>
                <div class="order-email">{{ $order->email }}</div>
                <div class="order-total">
                    Rp {{ number_format($order->total_price, 0, ',', '.') }}
                </div>

                <a href="{{ route('admin.order.detail', $order->id) }}" class="btn-detail">
                    Lihat Detail
                </a>
            </div>
        @endforeach
    </div>
</div>



</div>

<script>
window.addEventListener('load', function () {
    document.getElementById('skeleton-loading').style.display = 'none';
    document.getElementById('real-content').style.display = 'block';
});
</script>





@endsection
