<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CitaResource;
class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => DB::table('citas')->select('id', 'cita')->get()
        ]);
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
        $cita = Cita::create($request->all());
        return new CitaResource($cita);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'data' => DB::table('citas')->select('id', 'cita')->where('id', $id)->get()
        ]);
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
        $cita = Cita::findOrFail($id);
        $cita->update($request->all());
        return new CitaResource($cita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('citas')->where('id', $id)->delete();
        return response()->json([
            'estatus' => true
        ]);
    }
private function reglas_validacion() {
    return [
      "id" => 'required|numeric|min:0'
    , "especialista_id" => 'required|numeric|min:0'
    , "paciente_id" => 'required|numeric|min:0'
    , "recepcionista_id" => 'required|numeric|min:0'
    , "especialidad_id" => 'required|numeric|min:0'
    , "fecha_hora" => 'required|date'
    , "costo_consulta" => 'required|numeric|min:0'
    , "estatus" => 'required|in:Agendada,Confirmada,Cancelada,Realizada'
];
}
}