<?php

namespace App\Http\Controllers;

use App\Zapatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZapatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zapatos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zapatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request;
        DB::table('zapatos')->insert([
            'pedido'=>$data['pedido']

        ]);
        //para verificar q se envia
        //dd($request->all());
        //redireccion
        return redirect()->action('ZapatosController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zapatos  $zapatos
     * @return \Illuminate\Http\Response
     */
    public function show(Zapatos $zapatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zapatos  $zapatos
     * @return \Illuminate\Http\Response
     */
    public function edit(Zapatos $zapatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zapatos  $zapatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zapatos $zapatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zapatos  $zapatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zapatos $zapatos)
    {
        //
    }
}
