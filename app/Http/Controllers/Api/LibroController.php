<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        $libros = libro::all();
        return response()->json($libros, 200);
        
    }
    public function store(Request $request){
        $libro = libro::create($request->all());
        return response()->json($libro, 201);
    }
    public function show($id){
        $libro = libro::findOrFail($id);
        return response()->json($libro, 200);
    }
    public function update(Request $request, $id){
        $libro = libro::findOrFail($id);
        if($libro){
            $libro->update($request->all());
            return response()->json($libro, 200);
        }else{
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
    }
    public function destroy($id){
        $libro = libro::findOrFail($id);
        if($libro){
            $libro->delete();
            return response()->json(['message' => 'Libro eliminado'], 200);
        }else{
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
    }
}
