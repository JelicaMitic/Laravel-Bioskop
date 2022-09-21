<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'godina'=> $this->resource->godina,
            'zanr_id' => $this->resource ->zanr_id,
            'reziser_id'=> $this->resource ->reziser_id,
            'opis'=> $this->resource ->opis
        ];
    }
}
