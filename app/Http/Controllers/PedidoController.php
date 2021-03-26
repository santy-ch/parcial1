<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Support\Facades\user;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PedidoController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>'show']);
    }
   public function index()
   {
       $userZapatos=Auth::user()->userPedidos;
       return view('zapatos.index')->with('userZapatos',$userZapatos);
       
   }

   public function home(){
    $userZapatos=Auth::user()->userPedidos;

    return view('zapatos.menu')->with('userZapatos', $userZapatos);
}

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       // obtener categorias con el modelo
       $categorias=Categoria::all(['id','nombre']);
       return view('zapatos.create')->with('categorias',$categorias);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $data=$request->validate([
           'categoria'=>'required',
           'tipo'=>'required|min:4',
           'modelo'=>'required|min:4',
           'talla'=>'required',
           'color'=>'required|min:4',
           'imagen'=>'required'
       ]);

       $rutaImagen=$request['imagen']->store('upload-pedidos','public');
       //$imgResize=Image::make($request->file("storage/{​​$rutaImagen}​​")->getRealPath())->fit(500,500);
       //$imgResize->save();

        //insertar en la bd
       /*DB::table('pedidos')->insert([
          'categoria'=>$data['categoria']
       ]);*/
       //para verificar q se envia
       //dd($request->all());
       //redireccion

       //almacenamos con Modelo
       Auth::user()->userPedidos()->create([
           'tipo'=>$data['tipo'],
           'modelo'=>$data['modelo'],
           'talla'=>$data['talla'],
           'color'=>$data['color'],
           'imagen'=>$rutaImagen,
           'categoria_id'=>$data['categoria'],
       ]);

       return redirect()->action('PedidoController@index');

   }

   /**
    * Display the specified resource.
    *
    * @param  \App\  $zapatos
    * @return \Illuminate\Http\Response
    */
   public function show(Pedido $pedido)
   {
       return view('zapatos.show')->with('pedido', $pedido);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Pedido  $zapatos
    * @return \Illuminate\Http\Response
    */
   public function edit(Pedido $pedido)
   {
       $categorias=Categoria::all(['id','nombre']);

       return view('zapatos.edit')->with('categorias',$categorias)
                                  ->with('pedido', $pedido);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Pedido  $zapatos
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Pedido $pedido)
   {
       $data=$request->validate([
           'categoria'=>'required',
           'tipo'=>'required|min:4',
           'modelo'=>'required|min:4',
           'talla'=>'required',
           'color'=>'required|min:4',
           
           
       ]);

       //asignar valores ya editados
       $pedido->tipo=$data['tipo'];
       $pedido->modelo=$data['modelo'];
       $pedido->talla=$data['talla'];
       $pedido->color=$data['color'];
       $pedido->categoria_id=$data['categoria'];
       $pedido->save();
       return redirect()->action('PedidoController@index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Pedido  $zapatos
    * @return \Illuminate\Http\Response
    */
   public function destroy(Pedido $pedido)
   {
       $pedido->delete();
       return redirect()->action('PedidoController@index');
   }
}
