<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WrapperResource;
use App\Models\Wrapper;
use Illuminate\Http\Request;

class WrapperController extends Controller
{
    public function addToCart($id) {
        $wrapper = Wrapper::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$wrapper])) {
            return response()->json(['message' => 'Wrapper already exists in the cart'], 400);
        }
    
        $cart[$wrapper] = $wrapper;
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Wrapper added to cart'], 200);
    }

    public function removeFromCart($id) {
        $wrapper = Wrapper::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$wrapper])) {
            unset($cart[$wrapper]);
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Wrapper removed from cart'], 200);
        }

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return WrapperResource::collection(Wrapper::all());
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
        return new WrapperResource(Wrapper::findOrFail($id));
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
