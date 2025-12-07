<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    // Halaman dashboard admin
    public function dashboard()
    {
        // Ambil 20 order terbaru beserta items
        $orders = Order::with('items.service')
                        ->orderBy('created_at', 'desc')
                        ->take(20)
                        ->get();

        return view('admin.dashboard', compact('orders'));
    }

    // Detail order untuk admin
    public function showOrder($id)
    {
        $order = Order::with('items.service')->findOrFail($id);
        $orderItems = $order->items;

        return view('admin.detailOrder', compact('order', 'orderItems'));
    }
}

