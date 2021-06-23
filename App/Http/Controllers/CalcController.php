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
            'delivery' => 'required',
        ]);

        $price = 0;
        if($request['pass-width'] >= 150 && $request['pass-height'] >= 250)
        {
            if($request['trench-lenght'] <= 30)
            {
                $price = 4500;
            }
            else{
                if($request['trench-depth'] <= 120)
                {
                    if($request['trench-width'] <= 45)
                    {
                        $price = 150*$request['trench-lenght'];
                    }
                    else{
                        $price = 200*$request['trench-lenght'];
                    }
                }
                else{
                    if($request['trench-width'] <= 45)
                    {
                        $price = (150+($request['trench-depth']-120))*$request['trench-lenght'];
                    }
                    else{
                        $price = (200+($request['trench-depth']-120))*$request['trench-lenght'];
                    }
                }
            }
        }
        else if($request['pass-width'] >= 160 && $request['pass-height'] >= 200)
        {
            if($request['trench-lenght'] <= 30)
            {
                $price = 5000;
            }
            else{
                if($request['trench-depth'] <= 120)
                {
                    if($request['trench-width'] <= 45)
                    {
                        $price = 160*$request['trench-lenght'];
                    }
                    else{
                        $price = 210*$request['trench-lenght'];
                    }
                }
                else{
                    if($request['trench-width'] <= 45)
                    {
                        $price = (160+($request['trench-depth']-120))*$request['trench-lenght'];
                    }
                    else{
                        $price = (210+($request['trench-depth']-120))*$request['trench-lenght'];
                    }
                }
            }
        }
        $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
        if($request['ground-type']>1)
        {
            $price = $price."₽ + 2500₽/час";
        }
        else
        {
            $price = $price."₽";
        }
        if($request['pass-width'] < 150 || $request['pass-height'] < 200 || $request['communications-search'] > 1)
        {
            $price = 'Индивидуальный звонок';
        }

        //TODO:сделать обработку формы и возвращение ответа
        $data = ['price' => $price];
        return view('price', $data);
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

    function GetPriceLocation($location, $distance)
    {
        switch ($location){
            case 1:
                return 2000;
            case 2:
                return $distance * 40 * 2;
            case 3:
                return $distance * 40 * 2 + 3000;
        }
    }
}
