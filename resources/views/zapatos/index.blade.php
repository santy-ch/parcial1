@extends('layouts.app')
@section('botones')
    <a href={{route('zapatos.create')}} class="btn btn-primary">Calzado personalizado</a>
@endsection
@section('content')
<h1 class="text-center mb-5">VARIEDADES DE CALZADO</h1>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-ligth">
            <tr>
                <th scole="col">Categoria</th>
                <th scole="col">Tipo</th>
                <th scole="col">Modelo</th>
                <th scole="col">Talla</th>
                <th scole="col">Colores</th>
                <th scole="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>damas</td>
                <td>botas</td>
                <td>tacon bajo</td>
                <td>38</td>
                <td>abano</td>
                <td>$60</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection