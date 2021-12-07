<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Venta_Detalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Venta_DetalleResource;
use Illuminate\Support\Facades\Hash;

class Ventas_DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Venta_DetalleResource::collection(Venta_Detalle::all());
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
        $venta_detalle = Venta_Detalle::create($request->all());
        return new Venta_DetalleResource($venta_detalle);
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
            'data' => DB::table('ventas_detalle')->select(
                'venta_id',
                'producto_id',
                'precio_unitario',
                'cantidad',
                'subtotal',
                'iva')->where('venta_id',$id)->get()
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
    public function update(Request $request, $venta_id)
    {
        $request->validate($this->reglas_validacion());
        $venta_detalle = Venta_Detalle::findOrFail($venta_id);
        $venta_detalle->update($request->all());
        return new Venta_DetalleResource($venta_detalle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Venta_Detalle::find($id)->delete();
        return response()->json([
            'estatus' => true
        ]);
    }
    private function reglas_validacion() {
        return [
            'venta_id' =>'required|numeric|min:0'
     , 'producto_id' =>'required|numeric|min:0'
       ,'precio_unitario' => 'required|numeric|min:10'
       ,'cantidad' => 'required|numeric|min:10'
       ,'subtotal' => 'required|numeric|min:10'
      , 'iva' => 'required|numeric|min:10'

           
        ];
    }
}
