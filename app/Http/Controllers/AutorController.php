<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Autor;

class AutorController extends Controller
{

    public function index()
    {
        $autor = Autor::all();
        return $autor;
    }


    public function store(Request $request)
    {
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->fecha = $request->fecha;

        $autor->save();
    }

    public function update(Request $request)
    {
        $autor = Autor::findOrFail($request->id);
        $autor->nombre = $request->nombre;
        $autor->fecha = $request->fecha;

        $autor->save();
        return $autor;
    }

    public function destroy(request $request)
    {
        $autor = Autor::destroy($request->id);
        return $autor;
    }
}
