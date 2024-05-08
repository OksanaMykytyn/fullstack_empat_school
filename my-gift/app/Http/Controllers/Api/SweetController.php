<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SweetResource;
use App\Models\Sweet;
use Illuminate\Http\Request;

class SweetController extends Controller
{
    public function addToCart($id) {
        $sweet = Sweet::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$sweet])) {
            return response()->json(['message' => 'Sweet already exists in the cart'], 400);
        }
    
    
        $cart[$sweet] = $sweet;
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Sweet added to cart'], 200);
    }

    public function removeFromCart($id) {
        $sweet = Sweet::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$sweet])) {
            unset($cart[$sweet]);
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Sweet removed from cart'], 200);
        }

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SweetResource::collection(Sweet::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SweetResource(Sweet::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
