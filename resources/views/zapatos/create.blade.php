@extends('layouts.app')
<!--Estilos-->
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection
@section('botones')
    <a href={{route('zapatos.index')}} class="btn btn-primary">Menu de calzado</a>
@endsection
    @section('content')
    <h2 class="text-center mb-5">Realice el pedido del calzado de su preferencia</h2>
        <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                        <form method="POST" action="{{route('zapatos.store')}}" enctype="multipart/form-data" novalidate>
                            @csrf

                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" class="form-control @error('categoria')
                                        is-invalid
                                    @enderror"   
                                    id="categoria">
                                    <option value="">--Seleccione--</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}" {{old('categoria')==$categoria->id ? 'selected':''}}>{{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                                  @error('categoria')
                                        <span class="invalid-feedback d-block" role="alert"> 
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <input type="text" name="tipo" class="form-control @error('tipo')
                                    is-invalid
                                @enderror"  
                                id="tipo" placeholder="deportivo, casual.." value={{old('tipo')}}>
                                @error('tipo')
                                    <span class="invalid-feedback d-block" role="alert"> 
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="modelo">Modelo</label>
                                <input type="text" name="modelo" class="form-control @error('modelo')
                                    is-invalid
                                @enderror"  
                                id="modelo" placeholder="suela baja, suela alta..." value={{old('modelo')}}>
                                @error('modelo')
                                    <span class="invalid-feedback d-block" role="alert"> 
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="talla">Talla</label>
                                <input type="numeric" name="talla" class="form-control @error('talla')
                                    is-invalid
                                @enderror"  
                                id="talla" placeholder="36,38..." value={{old('talla')}}>
                                @error('talla')
                                    <span class="invalid-feedback d-block" role="alert"> 
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" name="color" class="form-control @error('color')
                                    is-invalid
                                @enderror"  
                                id="color" placeholder="color solido o mezclados" value={{old('color')}}>
                                @error('color')
                                    <span class="invalid-feedback d-block" role="alert"> 
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen de referencia</label>
                                <input id=imagen type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" >
                                 @error('imagen')
                                    <span class="invalid-feedback d-block" role="alert"> 
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                                
                                        <div class="form-group">
                                            <input type="submit"  class="btn btn-primary" value="enviar pedido" />

                                        </div>
                        </form>
                </div>
        </div>

    @endsection
    <!--Scripts-->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection