@extends('layouts.app')
@section('botones')
    <a href={{route('pedidos.index')}} class="btn btn-primary  mr-2 text-white ml-5">Menu principal</a>
@endsection

@section('content')
    
    <article class="contenido-pedido">
        <h1 class="text-center">{{$pedido->categoriaPedido->nombre}}</h1>
        <div class="imagen-pedido">
            <img src="/storage/{{$pedido->imagen}}" class="w-100">
        </div>
        <div class="pedido-data">
            <p>
                <span class="font-weight-bold text-primary">Tipo: </span>{{$pedido->tipo}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Modelo: </span>{{$pedido->modelo}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Talla: </span>{{$pedido->talla}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Color: </span>{{$pedido->color}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Fecha: </span>
                {{date('d-m-y', strtotime($pedido->created_at))}}
            </p>
        
        
        </div>
    </article>
@endsection