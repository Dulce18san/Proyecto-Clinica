<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Resources\ProductoResource;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductoResource::collection(Producto::all());
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
        $producto = Producto::create($request->all());
        return new ProductoResource($producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ProductoResource(Producto::findOrFail($id));
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
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return new ProductoResource($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::find($id)->delete();
        return response()->json([
            'estatus' => true
        ]);
    }

    private function reglas_validacion() {
        return [
            'producto' => 'required|max:45'
            , 'existencias' => 'required|integer|min:0'
            , 'precio_unitario' => 'required|numeric|min:10'
            , 'fotografia' => 'required|max:45'
            , 'descripcion' => 'required|max:1000'
            , 'tasa_iva' =>  'required|numeric|min:0'
            , 'estatus' => 'required|in:Activo,Inactivo'
        ];
    }
}
