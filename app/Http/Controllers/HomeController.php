<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use App\User;
use App\DetalleOpcional;
use App\DetalleProducto;
use App\Categoria;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $categorias = Categoria::orderBy('id','DESC')->get();
        $publicaciones = Publicacion::orderBy('id','DESC')->paginate(3);
        return view('home',compact('publicaciones','categorias'));
    }

    public function publicaciones(){
        $publicaciones = Publicacion::orderBy('id','DESC')->paginate(4);
        $categorias = Categoria::orderBy('id','DESC')->get();
        return view('blog.publicaciones',compact('publicaciones','categorias'));
    }

    public function detalle($id){
        $categorias = Categoria::orderBy('id','DESC')->get();
        $publicacion = Publicacion::find($id);
        $detalles = DetalleProducto::where('id_publicacion',$id);
        $detallesOpcionales = DetalleOpcional::where('id_publicacion',$id);
        return view('blog.detallePublicacion',compact('publicacion','detalles','detallesOpcionales','categorias'));
    }
}
