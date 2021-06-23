<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function Trench(Request $request)
    {
        $valid = $request->validate([
            'ground-type' => 'required|min:1',
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'trench-lenght' => 'required',
            'trench-depth' => 'required',
            'trench-width' => 'required',
        ]);

        dd($request);

        //TODO:сделать обработку формы и возвращение ответа
    }

    public function Pit(Request $request)
    {
        dd($request);

        //TODO:сделать обработку формы и возвращение ответа
    }

    public function Planning(Request $request)
    {

    }

    public function Terrasing(Request $request)
    {

    }

    public function Hydrodrill(Request $request)
    {

    }

    public function FoundationPit(Request $request)
    {

    }
}
