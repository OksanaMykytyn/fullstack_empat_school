<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComicResource;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function addToCart($id) {
        $comic = Comic::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$comic])) {
            return response()->json(['message' => 'Comics already exists in the cart'], 400);
        }
    
    
        $cart[$comic] = $comic;
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Comics added to cart'], 200);
    }

    public function removeFromCart($id) {
        $comic = Comic::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$comic])) {
            unset($cart[$comic]);
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Comics removed from cart'], 200);
        }

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ComicResource::collection(Comic::all());
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
        return new ComicResource(Comic::findOrFail($id));
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
