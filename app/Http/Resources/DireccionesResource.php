<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DireccionesResource extends JsonResource
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
                 'usuario_id' => $this->usuario_id
                , 'estado_id' => $this->estado_id
                , 'municipio_id' => $this->municipio_id
                , 'colonia' => $this->colonia
                , 'calle' => $this->calle
                , 'numero_exterior' => $this->numero_exterior
                , 'numero_interior' => $this->numero_interior
                , 'codigo_postal' => $this->codigo_postal
            ];
    }
}
