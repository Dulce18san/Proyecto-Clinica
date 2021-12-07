<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitaResource extends JsonResource
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
        , 'especialista_id' => $this->especialista_id
        , 'paciente_id' => $this->paciente_id
        , 'recepcionista_id' => $this->recepcionista_id
        , 'especialidad_id' => $this->especialidad_id
        , 'fecha_hora' => $this->fecha_hora
        , 'costo_consulta' => $this->costo_consulta
        , 'estatus' => $this->estatus
        ];

    }
}
