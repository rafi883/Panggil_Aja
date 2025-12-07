@extends('layouts.app')

@section('content')
<div class="admin-detail-order">
    <h1>Detail Pesanan #{{ $order->id }}</h1>

    <p><strong>User ID:</strong> {{ $order->user_id }}</p>
    <p><strong>Status:</strong> <span class="status-badge" data-status="{{ $order->status }}">{{ ucfirst($order->status) }}</span></p>
    <p><strong>Total Harga:</strong> Rp {{ number_format($order->total_price,0,',','.') }}</p>

    <h3>Item Pesanan</h3>
    <table class="table-orders">
        <thead>
            <tr>
                <th>Service</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $item)
            <tr>
                <td>{{ $item->service->nama_service }}</td>
                <td>Rp {{ number_format($item->harga,0,',','.') }}</td>
                <td>{{ $item->quantity }}</td>
                <td>Rp {{ number_format($item->quantity * $item->harga,0,',','.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.dashboard') }}" class="btn-kembali">Kembali ke Dashboard</a>
</div>
@endsection
