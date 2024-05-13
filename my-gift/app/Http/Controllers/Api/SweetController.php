<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SweetResource;
use App\Models\Sweet;
use Illuminate\Http\Request;

class SweetController extends Controller
{
        
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
