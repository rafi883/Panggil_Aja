<?php

namespace App\Http\Controllers;


use App\Models\carts;

use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index()
    {
        $carts = carts::where('user_id', auth()->id())->get();
        return view('cart.index', compact('carts'));
    }

    public function add(Request $request, $service_id)
    {
        carts::create([
            'user_id'    => auth()->id(),
            'service_id' => $service_id,
            'quantity'   => 1,
            'status'     => 'Tertunda'
        ]);

        return back()->with('success', 'Ditambahkan ke keranjang');
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
