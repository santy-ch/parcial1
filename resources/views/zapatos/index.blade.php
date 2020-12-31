@extends('layouts.app')
@section('content')
<h1>zapatos en oferta</h1>
@foreach ($zapatos as $zapato)
    <li>{{$zapato}}</li>
@endforeach
@endsection