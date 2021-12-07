<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Http\Resources\VentaResource;
use Illuminate\Support\Facades\Hash;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VentaResource::collection(Venta::all());
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
    public function store(Request $request)  //aqui actualizamos un registro
    {
        $request->validate($this->reglas_validacion());
        $venta = Venta::create($request->all());
        return new VentaResource($venta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  //para mostrar una lista 
    {
        return new VentaResource(Venta::findOrFail($id));
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
    public function update(Request $request, $id)   //para actualizar una venta
    {
        $request->validate($this->reglas_validacion());
        $venta = Venta::findOrFail($id);
        $venta->update($request->all());
        return new VentaResource($venta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)   //para eliminar una venta
    {
        Venta::find($id)->delete();
        return response()->json([
            'estatus' => true
        ]);
    }
    private function reglas_validacion() {
        return [
            'vendedor_id'  => 'required|numeric|min:0'
    , 'cliente_id'=> 'required|numeric|min:0'
    , 'direccion_id' => 'required|numeric|min:0'
    , 'fecha_hora' => 'required|date'
    , 'total' => 'required|numeric|min:0'
    , 'metodo_pago' => 'required|max:45'
        ];
    }
}
