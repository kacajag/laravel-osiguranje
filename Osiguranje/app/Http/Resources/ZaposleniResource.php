<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZaposleniResource extends JsonResource
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
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'email' => $this->resource->email,
            'pozicija' => $this->resource->pozicija,
            'broj_kartice' => $this->resource->broj_kartice,
            'kuca' => new OsiguravajucaKucaResource($this->resource->kuca)
        ];

    }
}
