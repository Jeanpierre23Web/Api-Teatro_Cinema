<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teatro_cinema;

class TeatroController extends Controller
{
    public function Listar(Request $request){
        return Ticket::all();
    }

    public function ListarUno(Request $request, $id){
        return Ticket::findOrFail($id);

    }

    public function Eliminar(Request $request, $id){
        $ticket = Ticket::findOrFail($id);
        $ticket -> delete();

        return [ "mensaje" => "Ticket $id eliminada."];
        
    }
    public function Insertar(Request $request){
        $ticket = new ticket;
        $ticket -> numero = $request -> post("numero");
        $ticket -> codigo = $request -> post("codigo");

        $ticket -> save();

        return $ticket;
    }
