<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teatro_cinemaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/Ticket",[TicketController::class,"Listar"]);

Route::get("/Ticket/{d}",[TicketController::class,"ListarUno"]);

Route::get("/Ticket",[TicketController::class,"Insertar"]);

Route::post("/Ticket",[TicketController::class,"InsertarUno"]);

Route::post("/Ticket",[TicketController::class,"Modificar"]);

Route::Deleted("/Ticket",[TicketController::class,"Eliminar"]);

Route::get('Ticket', Teatro_cinemaController::class);