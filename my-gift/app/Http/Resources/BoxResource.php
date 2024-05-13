<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BoxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'photo_path' => $this->photo_path,
            'wrapper' => new WrapperResource($this->wrapper),
            'comics' => ComicResource::collection($this->comics),
            'sweets' => SweetResource::collection($this->sweets),
        ];
    }
}
