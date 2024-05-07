<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BoxResource;
use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BoxResource::collection(Box::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BoxResource(Box::findOrFail($id));
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
