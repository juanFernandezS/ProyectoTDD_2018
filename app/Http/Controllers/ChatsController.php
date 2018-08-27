<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Http\Requests\ChatFormRequest;
use Illuminate\Http\Request;
use App\Chat;
use App\User;
use App\Publicacion;
use DB;

class ChatsController extends Controller
{
    //una vez el usuario inicia un chat es redirigido por esta funcion
    public function chats($id_compra){
        $chats = Chat::where('id_compra',$id_compra)->orderBy('id','ASC')->get();
        $id_comprador = Compra::where('id',$id_compra)->value('id_usuario');
        //dd($id_comprador);
        $compra= Compra::find($id_compra);
        $id_compra = Compra::where('id',$id_compra)->value('id');
        return view('chat.chat',compact('chats','id_compra','id_comprador','compra'));
    }

    //a esta funcion se accede desde navbar misChats
    public function verChat($id_user,$id_publicacion){
        $id_compra = Compra::where('id_usuario',$id_user)->where('id_publicacion',$id_publicacion)->value('id');
        $chats = Chat::where('id_compra',$id_compra)->orderBy('id','ASC')->get();
        $id_comprador = Compra::where('id',$id_compra)->value('id_usuario');
        $compra= Compra::find($id_compra);
        return view('chat.chat',compact('chats','id_compra','id_comprador','compra'));

        //chats($id_user,$id_publicacion);
    }

    public function nuevoChat($id_user,$id_publicacion){

        $validacion = Compra::where('id_usuario',$id_user)->where('id_publicacion',$id_publicacion)->first();
//        dd($validacion);
        if($validacion){
            echo 'ya tienes un chat ';
            return Redirect()->route('chats',['id'=>$validacion->id])->with('mensaje','continua el chat!!');
        }else{
            $compra = new Compra;
            $compra->id_usuario = $id_user;
            $compra->id_publicacion = $id_publicacion;
            $compra->confirmacion_vendedor = 0;
            $compra->confirmacion_comprador = 0;
            $compra->save();
            $id=$compra->id;
            return Redirect()->route('chats',compact('id'))->with('mensaje','Inicia la conversacion!');

        }
    }

    public function intereses($id_usuario){
        //lista de publicaciones en las que el usuario se a interesado y inicio chat
        $intereses = Compra::where('id_usuario',$id_usuario)->where('estado','pendiente')->get();
        //lista de las publicaciones del usuario que han sido solicitadas por otros
        $solicitudes = DB::table('compras')->join('publicaciones','compras.id_publicacion','=','publicaciones.id')
            ->join('users','compras.id_usuario','=','users.id')
            ->where('publicaciones.id_usuario','=',$id_usuario)
            ->where('publicaciones.estado','=','publicada')
            ->select('compras.id_usuario','publicaciones.titulo','compras.id_publicacion','users.nombre','users.apellidos')->get();


        return view('chat.intereses',compact('intereses','solicitudes'));
    }



    public function store(ChatFormRequest $request){
        $chat = Chat::create($request->all());
       // dd($chat);
        return redirect()->back()->with('mensaje','mensaje enviado');
    }

    public function destroy($id){
        $compra = Compra::find($id);
        $compra->estado = 'cancelada';
        $compra->save();

        return redirect()->route('home');
    }
}
