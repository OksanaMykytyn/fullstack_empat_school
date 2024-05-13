<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'box_id' => 'required|integer',
            'full_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'payment' => 'required|string',
        ]);

        $order = Order::create($data);
        $order->save();

        return response()->json(['message' => 'Order created successfully'], 201);
    }
}
