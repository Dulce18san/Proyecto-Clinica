<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            , 'especialidad_id' => $this->especialidad_id
            , 'name' => $this->name
            , 'primer_apellido' => $this->primer_apellido
            , 'segundo_apellido' => $this->segundo_apellido
            , 'sexo' => $this->sexo
            , 'fecha_nacimiento' => $this->fecha_nacimiento
            , 'numero_celular' => $this->numero_celular
            , 'numero_fijo' => $this->numero_fijo
            , 'numero_trabajo' => $this->numero_trabajo
            , 'email' => $this->email
            , 'rfc' => $this->rfc
            , 'cedula_profesional' => $this->cedula_profesional
            , 'costo_consulta' => $this->costo_consulta
            // , 'password' => $this->password
            , 'perfil' => $this->perfil
            , 'estatus' => $this->estatus
        ];
    }
}
