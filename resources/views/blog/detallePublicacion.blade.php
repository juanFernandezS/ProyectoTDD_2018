@extends('layouts.app')

@section('content')


       <div class="row">

           <div class="col-md-6">
               <h2> {{ $publicacion->titulo }}</h2>
               {{ $publicacion->comentario }}
               <br>
               <p>Creado por : {{ $publicacion->user->nombre  }} {{ $publicacion->user->apellidos  }}</p>

               <p><strong>Cantidad de Articulos</strong>:{{$publicacion->cantidad}}</p>
               <p><strong>Precio por articulo</strong>:{{$publicacion->precio}}</p>


               <div>
                   <strong>detalles tecnicos </strong><br>
                   @if(count($detalles)>0)
                        @foreach($detalles as $d)
                            {{ $d->caracteristica->nombre }} :  {{ $d->descripcion }}<br>
                        @endforeach
                        @else
                       <div class="alert alert-info" role="alert">
                           No se presentan registros
                       </div>
                       @endif
                   <br>
               </div>
               <div>
                   <strong>detalles extra del usuario</strong>
                   <br>
                    @if(count($detallesOpcionales)>0)
                   @foreach($detallesOpcionales as $do)
                       {{ $do->nombre}}: {{ $do->descripcion}}<br>
                   @endforeach
                        @else
                       <div class="alert alert-info" role="alert">
                           No se presentan registros exta
                       </div>
                   @endif
               </div>
               <div><a href=""  class="btn btn-primary" data-toggle="modal" data-target="#ContactoModal">Me interesa</a></div>
               <div class="modal fade" id="ContactoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header p-3 mb-2 bg-warning text-white">
                               <h5 class="modal-title" id="exampleModalLabel">Atención!! </h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                              <strong>
                                  Si te intereso el articulo puedes dejarle un mensaje al vendedor!!
                                  Y asi podran organizar la compra
                              </strong>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                              <a class="btn btn-primary" href="{{route('nuevoChat',[Auth::user(),$publicacion->id])}}">Continuar</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-md-6">
               <img style="height: 300px; width: 90%; display: block;" src="{{$publicacion->imagen}}">

           </div>
       </div>

@endsection

