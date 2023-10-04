<?php

namespace App\Http\Controllers;
use App\Models\Tareas;
use Illuminate\Http\Request;

class tareaController extends Controller
{
    public function crearUnaTarea(Request $request){
        $Tarea = new Tareas;
        $Tarea -> titulo = $request->post("Titulo");
        $Tarea -> contenido = $request->post("Contenido");
        $Tarea -> estado = $request->post("Estado");
        $Tarea -> autor = $request ->post("Autor");
        $Tarea -> save();
        return $Tarea;

    }

    public function devolverTodasLasTareas(Request $request){
      return Tareas::return(all);

    }

    public function buscarUnaTarea(Request $request, $idTarea){
        return Tareas::findOrFail($idTarea);
    }

    public function modificarUnaTarea(Request $request, $idTarea){
        $Tarea = Tareas::findOrFail($idTarea);
        $Tarea -> titulo = $request->post("Titulo");
        $Tarea -> contenido = $request->post("Contenido");
        $Tarea -> estado = $request->post("Estado");
        $Tarea -> autor = $request ->post("Autor");
        $Tarea -> save;
        return $Tarea;
    }

    public function eliminarUnaTarea(Request $request, $idTarea){
       $Tarea = Tareas::findOrFail($idTarea);
        $Tarea -> delete();
    }


}
