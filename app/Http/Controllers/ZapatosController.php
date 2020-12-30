<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZapatosController extends Controller
{
    public function __invoke()
    {
        $zapatos=['zapatos casuales',
                'zapatos deportivos',
                'zapatos ninos'];

        return view('zapatos.index', compact('zapatos'));

    }
}