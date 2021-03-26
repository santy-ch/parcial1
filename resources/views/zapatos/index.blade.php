@extends('layouts.app')
@section('botones')
    <a href={{route('pedidos.create')}} class="btn btn-primary">Calzado personalizado</a>
@endsection
@section('content')
<h1 class="text-center mb-5">VARIEDADES DE CALZADO</h1>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-ligth">
            <tr>
                <th scole="col">Categoria</th>
                <th scole="col">Modelo</th>
                <th scole="col">Talla</th>
                <th scole="col">Colores</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userZapatos as $userZapato)
                <tr>
                    <td>{{$userZapato->categoriaPedido->nombre}}</td>
                    <td>{{$userZapato->modelo}}</td>
                    <td>{{$userZapato->talla}}</td>
                    <td>{{$userZapato->color}}</td>
                    <td>
                    <a href="{{route('pedidos.show',['pedido'=>$userZapato->id])}}" class="btn btn-success d-block">Ver</a>
                    <a href="{{route('pedidos.edit',['pedido'=>$userZapato->id])}}" class="btn btn-dark d-block">Editar</a>
                    <eliminar-pedido id-pedido={{$userZapato->id}}></eliminar-pedido>
                    </td>
                </tr>
             @endforeach
        
        </tbody>
    </table>
</div>
@endsection