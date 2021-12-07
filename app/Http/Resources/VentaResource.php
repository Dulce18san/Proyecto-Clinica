<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VentaResource extends JsonResource
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
              'id' => $this->id
            , 'vendedor_id' => $this->vendedor_id
            , 'cliente_id' => $this->cliente_id
            , 'direccion_id' => $this->direccion_id
            , 'fecha_hora' => $this->fecha_hora
            , 'total' => $this->total
            , 'metodo_pago' => $this->metodo_pago
            
        ];
    }
}
