<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Direcciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\DireccionesResource;
class DireccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DireccionesResource::collection(Direcciones::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->reglas_validacion());
        $direccion = Direcciones::create($request->all());
        return new DireccionesResource($direccion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new DireccionesResource(Direcciones::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->reglas_validacion());
        $direccion = Direcciones::findOrFail($id);
        $direccion->update($request->all());
        return new DireccionesResource($direccion);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('direcciones')->where('id', $id)->delete();
        return response()->json([
            'estatus' => true
        ]);
    }
private function reglas_validacion() {
    return [
    'usuario_id' => 'required|numeric|min:0'
    , 'estado_id' => 'required|numeric|min:0'
    , 'municipio_id' => 'required|numeric|min:0'
    , 'colonia' => 'required|max: 45'
    , 'calle' => 'required|max:45'
    , 'numero_exterior' => 'required|numeric|min:0'
    , 'numero_interior' => 'required|numeric|min:0'
    ,'codigo_postal' => 'required|numeric|min:0'
    ];
}
}
