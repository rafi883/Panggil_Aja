<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\checkouts;
use Illuminate\Http\Request;



class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function process(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        checkouts::create([
            'user_id' => auth()->id(),
            'email'   => $request->email,
            'status'  => 'Menunggu Pembayaran',
        ]);

        carts::where('user_id', auth()->id())->update(['status' => 'Diproses']);

        return redirect('/services')->with('success', 'Checkout berhasil!');
    }

    // Admin melihat semua checkout
    public function adminIndex()
    {
        $checkouts = checkouts::with('user')->get();
        return view('admin.checkouts.index', compact('checkouts'));
    }

    // Admin update status
    public function updateStatus(Request $request, $id)
    {
        checkouts::findOrFail($id)->update([
            'status' => $request->status
        ]);

        return back();
    }
}
