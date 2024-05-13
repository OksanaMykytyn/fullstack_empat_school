<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BoxResource;
use App\Models\Box;
use App\Models\BoxComic;
use App\Models\BoxSweet;
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
    $data = $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'photo_path' => 'nullable|string',
        'wrapper_id' => 'required|int',
        'comics' => 'nullable|array',
        'sweets' => 'nullable|array',
    ]);

    $box = Box::create([
        'name' => $data['name'],
        'description' => $data['description'],
        'price' => $data['price'],
        'photo_path' => $data['photo_path'],
        'wrapper_id' => $data['wrapper_id'],
    ]);

    if (isset($data['comics'])) {
        foreach ($data['comics'] as $comicId) {
            BoxComic::create([
                'box_id' => $box->id,
                'comic_id' => $comicId,
            ]);
        }
    }

    if (isset($data['sweets'])) {
        foreach ($data['sweets'] as $sweetId) {
            BoxSweet::create([
                'box_id' => $box->id,
                'sweet_id' => $sweetId,
            ]);
        }
    }

    $box->save();

    return response()->json(['message' => 'Box created successfully', 'box_id' => $box->id], 201);
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
