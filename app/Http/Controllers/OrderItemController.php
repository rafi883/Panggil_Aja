<?php

namespace App\Http\Controllers;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function updateStatus(Request $request)
{
    $item = OrderItem::find($request->id);
    if ($item) {
        $item->status = $request->status;
        $item->save();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false], 404);
}

}
