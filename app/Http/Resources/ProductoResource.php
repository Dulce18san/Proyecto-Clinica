<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
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
            'id' => $this->id,
            'producto' => $this->producto,
            'existencias' => $this->existencias,
            'precio_unitario' => $this->precio_unitario,
            'fotografia' => $this->fotografia,
            'descripcion' => $this->descripcion,
            'fotografia' => $this->fotografia,
            'tasa_iva' => $this->tasa_iva,
            'estatus' => $this->estatus
        ];
    }
}
