<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('keranjang');
    }

    public function checkout(Request $request)
{
    // Pastikan user login
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    $user_id = auth()->id();

    // Ambil semua cart yang statusnya Tertunda
    $cartItems = Cart::where('user_id', $user_id)
                    ->where('status', Cart::STATUS_TERTUNDA)
                    ->get();

    if ($cartItems->isEmpty()) {
        return back()->with('error', 'Keranjang Anda masih kosong.');
    }

    DB::beginTransaction();

    try {
        // Hitung total harga checkout
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->quantity * $item->service->harga;
        }

        // Buat Order baru
        $order = Order::create([
            'user_id' => $user_id,
            'total_price' => $total,
            'status' => Order::STATUS_TERTUNDA,
        ]);

        // Pindahkan cart → order_items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'service_id' => $item->service_id,
                'quantity'   => $item->quantity,
                'harga'      => $item->service->harga, // harga satuan
            ]);

            // Update status cart menjadi "Diproses"
            $item->status = Cart::STATUS_DIPROSES;
            $item->save();
        }

        DB::commit();

        return redirect()->route('keranjang.index', $order->id)
                         ->with('success', 'Checkout berhasil! Pesanan Anda sudah dibuat.');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', 'Terjadi kesalahan saat checkout: ' . $e->getMessage());
    }
}


    // // Admin melihat semua checkout
    // public function adminIndex()
    // {
    //     $checkouts = checkouts::with('user')->get();
    //     return view('admin.checkouts.index', compact('checkouts'));
    // }

    // // Admin update status
    // public function updateStatus(Request $request, $id)
    // {
    //     checkouts::findOrFail($id)->update([
    //         'status' => $request->status
    //     ]);

    //     return back();
    // }
}
