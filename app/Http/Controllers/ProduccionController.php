<?php

namespace App\Http\Controllers;

use App\Models\Produccion;
use Illuminate\Http\Request;

class ProduccionController extends Controller
{
    public function index(Request $request){
        $busqueda = $request->busqueda;
        $usuarios = Produccion::paginate(12);
        return view('produccion', compact('usuarios','busqueda'));
    }
    public function filtro_name(Request $request){
        $busqueda = $request->busqueda;
        if($request->nombre == ''){
            $usuarios = Produccion::orderBy('id','DESC')->paginate(4);
        }else{
            $usuarios = Produccion::where('nombre', $request->nombre)->paginate(12);
        }
        return view('produccion', compact('usuarios', 'busqueda'));
    }

    public function store(Request $request)
    {
        $usuarios = new  Produccion();
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->pais = $request->pais;

        $nombre='';
        if (!empty($request -> file('foto'))) {
            $imagen = $request -> file('foto');
            $nombre = time(). '_'. $imagen -> getClientoriginalName();
            $ruta = public_path().'/fotos';
            $imagen->move($ruta,$nombre);
        }
        $usuarios->foto='/fotos/'.$nombre;

        $usuarios->save();
        return redirect()->route('produccion.ver');
    }

    public function update(Request $request){
        $usuarios = Produccion::find($request->id); 
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->pais = $request->pais;

        $nombre='';
        if (!empty($request -> file('foto'))) {
            $imagen = $request -> file('foto');
            $nombre = time(). '_'. $imagen -> getClientoriginalName();
            $ruta = public_path().'/fotos';
            $imagen->move($ruta,$nombre);
        }
        $usuarios->foto='/fotos/'.$nombre;


        $usuarios->save();
        return redirect()->route('produccion.ver');
    }

    public function destroy($id){
        Produccion::where('id',$id)->first()->delete();
        return redirect()->route('produccion.ver');
    }
}
