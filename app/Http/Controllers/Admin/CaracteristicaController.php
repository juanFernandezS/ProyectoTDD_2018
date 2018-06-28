<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CaracteristicaStoreRequest;
use App\Http\Requests\CaracteristicaUpdateRequest;
use App\Http\Controllers\Controller;
use App\Caracteristica;


class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaracteristicaStoreRequest $request)
    {
        $caracteristica = Caracteristica::create($request->all());
        //return redirect()->route('articulos.index')->with('mensaje','caracteristica agregada con exito');
        return back()->with('mensaje','agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CaracteristicaUpdateRequest $request, $id)
    {
        $caracteristica = Caracteristica::find($id);

        $caracteristica->fill($request->all())->save();
        //return redirect()->route('articulos.index')->with('mensaje','caracteristica actualizada');
        return back()->with('mensaje','Caracteristica Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caracteristica = Caracteristica::find($id)->delete();
        return back()->with('mensaje','eliminado');
    }
}
