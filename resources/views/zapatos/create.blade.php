@extends('layouts.app')
@section('botones')
    <a href={{route('zapatos.index')}} class="btn btn-primary">Menu de calzado</a>
@endsection
@section('content')
<h2 class="text-center mb-5">Realice el pedido del calzado de su modelo preferido</h2>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form method="POST" action="{{route('zapatos.store')}}">
            @csrf
            <div class="form-group">
                <label for="pedido">Pedido</label><br>
                <input type="text" name="pedido" class="form-control" id="pedido" placeholder="realizar pedido" />
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="enviar pedido" />

            </div>

        </form>

    </div>

</div>

@endsection