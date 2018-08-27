<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;
use App\Publicacion;
use App\User;
use App\DetalleOpcional;
use App\DetalleProducto;
use App\Categoria;
use DB;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $categorias = Categoria::orderBy('id','DESC')->get();
        $articulos = Articulo::orderBy('id','ASC')->get();
        $publicaciones = Publicacion::where('estado','publicada')->orderBy('id','DESC')->paginate(3);
        return view('home',compact('publicaciones','categorias','articulos'));
    }

    public function publicaciones(){
        $publicaciones = Publicacion::where('estado','publicada')->orderBy('id','DESC')->paginate(9);
        $categorias = Categoria::orderBy('id','DESC')->get();
        $articulos = Articulo::orderBy('id','ASC')->get();
        return view('blog.publicaciones',compact('publicaciones','categorias','articulos'));
    }
    public function publicacionesFiltro($id_categoria){
       $busqueda = Categoria::find($id_categoria);
        $publicaciones = DB::table('publicaciones')->join('articulos','publicaciones.id_articulo','=','articulos.id')->where('articulos.id_categoria','=',$id_categoria)->where('publicaciones.estado','publicada')->get();

        $categorias = Categoria::orderBy('id','DESC')->get();
        $articulos = Articulo::orderBy('id','ASC')->get();
        return view('blog.filtro',compact('publicaciones','categorias','articulos','busqueda'));
    }
    public function publicacionesFiltroArticulo($id_articulo){
       // dd($id_articulo);
        //$publicaciones = DB::table('publicaciones')->where('publiid_articulo',$id_articulo)->where('estado','publicada')->get();
        $publicaciones = Publicacion::where('id_articulo',$id_articulo)->where('estado','publicada')->orderBy('id','DESC')->paginate(5);
        $busqueda = Articulo::find($id_articulo);

        $categorias = Categoria::orderBy('id','DESC')->get();
        $articulos = Articulo::orderBy('id','ASC')->get();
        return view('blog.filtro',compact('publicaciones','categorias','articulos','busqueda'));
    }

    public function detalle($id){
        //$categorias = Categoria::orderBy('id','DESC')->get();
        $publicacion = Publicacion::find($id);
        $detalles = DetalleProducto::where('id_publicacion',$id)->get();
        $detallesOpcionales = DetalleOpcional::where('id_publicacion',$id)->get();
       // $articulos = Articulo::orderBy('id','ASC')->get();
        return view('blog.detallePublicacion',compact('publicacion','detalles','detallesOpcionales','categorias','articulos'));
    }
}
