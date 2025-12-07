<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('detailPesanan');
    }





    // Menampilkan detail pesanan
    public function show($id)
{
    $order = Order::with('items.service')->findOrFail($id);
    $orderItems = $order->items;

    return view('detailpesanan', compact('order', 'orderItems'));
}




}
