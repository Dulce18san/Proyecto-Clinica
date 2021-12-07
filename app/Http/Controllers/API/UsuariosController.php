<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Resources\UsuarioResource;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UsuarioResource::collection(Usuario::all());
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
    public function store(Request $request)  //funcion para agregar 
    {
        $usuario = $request->user();   //aqui se ve que el dueño, tengo el perfil de administrador 
        if( 'Administrador' != $usuario->perfil) {
            abort(401, 'Operación no permitida');
        }
        
        $request->validate(Usuario::reglas_validacion());
        $request->merge([
            'password' => Hash::make($request->password)
        ]);
        $usuario = Usuario::create($request->all());
        return new UsuarioResource($usuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //para mostrar
    {
        return new UsuarioResource(Usuario::findOrFail($id));
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
    public function update(Request $request, $id)  //funcion para actualizar 
    {
        $usuario = $request->user();   //aqui se ve que el dueño, tengo el perfil de administrador 
        if( 'Administrador' != $usuario->perfil) {
            abort(401, 'Operación no permitida');
        }
        $request->validate(Usuario::reglas_validacion());
        $request->merge([
            'password' => Hash::make($request->password)
        ]);
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return new UsuarioResource($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $usuario = $request->user();   //aqui se ve que el dueño, tengo el perfil de administrador 
        if( 'Administrador' != $usuario->perfil) {
            abort(401, 'Operación no permitida');
        }
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return new UsuarioResource($usuario);

    }
}

