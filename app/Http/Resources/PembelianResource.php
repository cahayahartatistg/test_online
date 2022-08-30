<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PembelianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'keterangan' => $this->keterangan,
            'total_harga' => $this->total_harga,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at, 
        ];
    }
}