<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Publicacion;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function confirmacionComprador($id_compra,$id_usuario){
        $compra = Compra::find($id_compra);
        $compra->confirmacion_comprador = 1;
        $compra->save();
        if($compra->confirmacion_comprador == 1 && $compra->confirmacion_vendedor == 1 ){
            $compra->estado = 'completada';
            $compra->save();
            $publicacion = Publicacion::find($compra->id_publicacion);
            $publicacion->estado = 'completada';
            $publicacion->save();
            return redirect()->route('intereses',$id_usuario)->with('mensaje','compra completada'.$compra->publicacion->titulo);
        }else {
            return redirect()->back()->with('mensaje', 'ya has confirmado la compra,esperemos la confirmacion del comprador');
        }
    }

    public function confirmacionVendedor($id_compra,$id_usuario){
        $compra = Compra::find($id_compra);
        $compra->confirmacion_vendedor = 1;
        $compra->save();
        if($compra->confirmacion_comprador == 1 && $compra->confirmacion_vendedor == 1 ){
            $compra->estado = 'completada';
            $compra->save();
            $publicacion = Publicacion::find($compra->id_publicacion);
            $publicacion->estado = 'completada';
            $publicacion->save();
            return redirect()->route('intereses',$id_usuario);
        }else {
            return redirect()->back()->with('mensaje', 'Ya has confirmado la Venta, esperamos la confirmacion del comprador');
        }

    }
}
