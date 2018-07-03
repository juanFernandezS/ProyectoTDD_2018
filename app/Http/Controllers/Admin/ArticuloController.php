<?php

namespace App\Http\Controllers\Admin;

use App\Caracteristica;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Articulo;
use App\Categoria;
use DB;
use App\Http\Requests\ArticuloStoreRequest;
use App\Http\Requests\ArticuloUpdateRequest;

class ArticuloController extends Controller
{

    public function index()
    {
        $articulos = Articulo::orderBy('id','DESC')->paginate();
        //dd($articulos);
        return view('admin.articulos.index',compact('articulos'));
    }


    public function create()
    {
        $categorias = Categoria::orderBy('id','ASC')->pluck('nombre','id');
        //dd($categorias);
        return view('admin.articulos.create',compact('categorias'));
    }


    public function store(ArticuloStoreRequest $request)
    {
        $articulo = Articulo::create($request->all());
        return redirect()->route('articulos.index',$articulo->id)->with('mensaje','articulo creado con exito');
    }


    public function show($id)
    {
        $articulo = Articulo::find($id);
        $caracteristicas = Caracteristica::where('id_articulo',$id)->get();

        return view('admin.articulos.show',compact('articulo','caracteristicas'));
    }


    public function edit($id)
    {
        $categorias = Categoria::orderBy('id','ASC')->pluck('nombre','id');
        $articulo = Articulo::find($id);
        return view('admin.articulos.edit',compact('articulo','categorias'));
    }


    public function update(ArticuloUpdateRequest $request, $id)
    {
        $articulo = Articulo::find($id);

        $articulo->fill($request->all())->save();
        return redirect()->route('articulos.index',$articulo->id)->with('mensaje','articulo actualizado con exito');
    }


    public function destroy($id)
    {
        $articulo = Articulo::find($id)->delete();
        return back()->with('mensaje','eliminado articulo');
    }
}

