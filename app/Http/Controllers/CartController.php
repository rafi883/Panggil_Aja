<?php

namespace App\Http\Controllers;


use App\Models\carts;
use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index()
    {
        $carts = carts::where('user_id', auth()->id())->get();
        return view('keranjang', compact('carts'));
    }

    public function add($service_id)
{
    // Pastikan user login
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    $user_id = auth()->id();

    // Cek apakah layanan sudah ada di cart dengan status Tertunda
    $cart = Cart::where('user_id', $user_id)
                ->where('service_id', $service_id)
                ->where('status', Cart::STATUS_TERTUNDA)
                ->first();

    if ($cart) {
        // Jika sudah ada, tambah quantity
        $cart->quantity += 1;
        $cart->save();
    } else {
        // Buat cart baru
        Cart::create([
            'user_id'    => $user_id,
            'service_id' => $service_id,
            'quantity'   => 1,
            'status'     => Cart::STATUS_TERTUNDA
        ]);
    }

    //  Redirect kembali ke halaman detail service
    return redirect()
        ->route('service.detail', $service_id)
        ->with('success', 'Service berhasil ditambahkan ke keranjang!');
}


    public function update(Request $request, $id)
    {
        Carts::findOrFail($id)->update([
            'quantity' => $request->quantity
        ]);

        return back();
    }

    public function delete($id)
    {
        Carts::findOrFail($id)->delete();
        return back();
    }

    // Admin
    public function adminIndex()
    {
        $carts = Carts::with(['user', 'service'])->get();
        return view('admin.carts.index', compact('carts'));
    }
}
