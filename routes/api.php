<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use App\Http\Controllers\API\EspecialidadesController;
use App\Http\Controllers\API\ProductosController;
use App\Http\Controllers\API\UsuariosController;
use App\Http\Controllers\API\VentasController;
use App\Http\Controllers\API\Ventas_DetalleController;
use App\Http\Controllers\API\DireccionesController;
use App\Http\Controllers\API\EstadosController;
use App\Http\Controllers\API\CitasController;
use App\Http\Controllers\API\MunicipiosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->group(function () {
Route::resource('especialidades', EspecialidadesController::class);
Route::resource('productos', ProductosController::class);
Route::resource('usuarios', UsuariosController::class);
Route::resource('ventas', VentasController::class);
Route::resource('ventas_detalle', Ventas_DetalleController::class);
Route::resource('direcciones', DireccionesController::class);
Route::resource('estados', EstadosController::class);
Route::resource('citas', CitasController::class);
Route::resource('municipios', MunicipiosController::class);
});

 Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
