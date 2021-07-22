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
            'redirpage' => 'required'
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'trench',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'trench-lenght' => $request['trench-lenght'],
            'trench-depth' => $request['trench-depth'],
            'trench-width' => $request['trench-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Pit(Request $request)
    {
        $valid = $request->validate([
            'ground-type' => 'required|min:1',
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'pit-lenght' => 'required',
            'pit-depth' => 'required',
            'pit-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'pit',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'pit-lenght' => $request['pit-lenght'],
            'pit-depth' => $request['pit-depth'],
            'pit-width' => $request['pit-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Planning(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'area-max-length' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'planning',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'area-lenght' => $request['area-lenght'],
            'area-max-length' => $request['area-max-length'],
            'area-width' => $request['area-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Terracing(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'area-max-length' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'terracing',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'area-lenght' => $request['area-lenght'],
            'area-max-length' => $request['area-max-length'],
            'area-width' => $request['area-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Hydrodrill(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'hole-depth' => 'required',
            'trench-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'hydrodrill',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'hole-depth' => $request['hole-depth'],
            'trench-width' => $request['trench-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Hydrohammer(Request $request)
    {
        $data = [
            'item-type' => 'hydrodrill',
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function FoundationPit(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'foundation-depth' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'foundationPit',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'area-lenght' => $request['area-lenght'],
            'foundation-depth' => $request['foundation-depth'],
            'area-width' => $request['area-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function RedirectToNextForm($redirpage)
    {
        switch ($redirpage){
            case 1:
                return redirect()->route('trench');
                break;
            case 2:
                return redirect()->route('pit');
                break;
            case 3:
                return redirect()->route('planning');
                break;
            case 4:
                return redirect()->route('terracing');
                break;
            case 5:
                return redirect()->route('hydrohammer');
                break;
            case 6:
                return redirect()->route('hydrodrill');
                break;
            case 7:
                return redirect()->route('foundation_pit');
                break;
            default:
                return redirect()->route('choise');
        }
    }

    public function SummaryAllForms()
    {
        $price = [
            'main' => 0,
            'hour' => 0,
            'error' => 0
        ];

        foreach (session('session-data') as $item)
        {
            if($item['pass-width'] >= 150 & $item['pass-height'] >= 250) //с кабиной
            {
               switch ($item['item-type'])
               {
                   case 'trench':
                       break;
                   case 'pit':
                       break;
                   case 'planning':
                       $price = $this->PlanningSummary($price, $item['area-lenght'], $item['area-max-length'], $item['area-width'], true);
                       break;
                   case 'terracing':
                       break;
                   case 'hydrodrill':
                       break;
                   case 'hydrohammer':
                       break;
                   case 'foundationPit':
                       break;
               }
            }
            else if($item['pass-width'] >= 160 & $item['pass-height'] >= 200) //без кабины
            {
                switch ($item['item-type'])
                {
                    case 'pit':
                    case 'trench':
                        $price['main'] += 1000;
                        break;
                    case 'planning':
                        $price = $this->PlanningSummary($price, $item['area-lenght'], $item['area-max-length'], $item['area-width'], false);
                        break;
                }
            }
            else //индивидуальный звонок
            {
                $price['error'] = 1;
                $price['errormessage'] = 'Индивидуальный звонок';
                break;
            }
        }

        session()->forget('session-data');
        session()->put('session-data', array());
        $data = ['price' => $price];
        return view('price', $data);
    }


    public function TrenchSummary(Request $request)
    {
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
        if($request['pass-width'] < 150 || $request['pass-height'] < 200 || $request['communications-search'] == 2)
        {
            $price = 'Индивидуальный звонок';
        }

        $data = ['price' => $price];
        return view('price', $data);
    }























    public function PitSummary(Request $request)
    {
        $valid = $request->validate([
            'ground-type' => 'required|min:1',
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'pit-lenght' => 'required',
            'pit-depth' => 'required',
            'pit-width' => 'required',
            'delivery' => 'required',
        ]);

        $price = 0;
        if($request['pit-lenght'] <= 250 && $request['pit-depth'] <= 220 && $request['pit-lenghtpit-width'] <= 400)
            if($request['ground-type'] == 1)
                if($request['delivery'] == 1)
                {
                    $price = 9000;
                    $data = ['price' => $price];
                    return view('price', $data);
                }
                else
                    $price = 7000;
            else if($request['delivery'] == 1) {
                $price = '2000₽ + 2500₽/час';
                $data = ['price' => $price];
                return view('price', $data);
            }
                else {
                    $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
                    $price = $price."₽ + 2500₽/час";
                    $data = ['price' => $price];
                    return view('price', $data);
                }
        else
        {
            $price = 'Индивидуальный звонок';
            $data = ['price' => $price];
            return view('price', $data);
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
        if($request['pass-width'] < 150 || $request['pass-height'] < 200 || $request['communications-search'] == 2)
        {
            $price = 'Индивидуальный звонок';
        }
        $data = ['price' => $price];
        return view('price', $data);
    }

    public function PlanningSummary($price, $x, $z, $y, $cabina)
    {
        $cubes = ($z /2) * $x * $y;
        $time = intval($cubes / 7);

        if($cabina)
        {
            $price['main'] += 1500*$time;
        }
        else if(!$cabina)
        {
            $price['main'] += 1700*$time;
        }
        return $price;
    }

    public function TerracingSummary(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'area-max-length' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        $price = 0;
        $cubes = ($request['area-max-length'] /2) * $request['area-lenght'] * $request['area-width'];
        $time = intval($cubes / 7);
        if($request['pass-width'] >= 150 && $request['pass-height'] >= 250)
        {
            $price = $time * 1500;
        }
        else if($request['pass-width'] >= 160 && $request['pass-height'] >= 200)
        {
            $price = $time * 1700;
        }
        $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
        if($request['ground-type']>5)
        {
            $price = $price."₽ + 2500₽/час";
        }
        else
        {
            $price = $price."₽";
        }
        if($request['pass-width'] < 150 || $request['pass-height'] < 200 || $request['communications-search'] == 2)
        {
            $price = 'Индивидуальный звонок';
        }

        $data = ['price' => $price];
        return view('price', $data);
    }

    public function HydrodrillSummary(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'hole-depth' => 'required',
            'trench-width' => 'required',
            'delivery' => 'required',
        ]);

        $price = 0;
        if($request['hole-depth'] <= 100)
        {
            if($request['trench-width'] <= 12)
            {
                $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
                $price = $price.' + 2000₽/час';
                $data = ['price' => $price];
                return view('price', $data);
            }
            else
            {
                $price = 550 * $request['trench-width'];
            }
        }
        else if ($request['hole-depth'] <= 200)
        {
            if($request['trench-width'] <= 12)
            {
                $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
                $price = $price.' + 2000₽/час';
                $data = ['price' => $price];
                return view('price', $data);
            }
            else
            {
                $price = 600 * $request['trench-width'];
            }
        }
        else if ($request['hole-depth'] > 200)
        {
            $price = 'Индивидуальный звонок';
            $data = ['price' => $price];
            return view('price', $data);
        }
        $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
        if($request['ground-type']>5)
        {
            $price = $price."₽ + 2500₽/час";
        }
        else
        {
            $price = $price."₽";
        }
        if($request['pass-width'] < 150 || $request['pass-height'] < 200 || $request['communications-search'] == 2)
        {
            $price = 'Индивидуальный звонок';
        }

        $data = ['price' => $price];
        return view('price', $data);
    }

    public function FoundationPitSummary(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'foundation-depth' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        $price = 0;
        $cubes = 1.2 * $request['area-lenght'] * $request['area-width'] * $request['foundation-depth']/1000000;
        $time = intval($cubes / 7000);
        if($request['pass-width'] >= 150 && $request['pass-height'] >= 250)
        {
            $price = $time * 1500;
        }
        else if($request['pass-width'] >= 160 && $request['pass-height'] >= 200)
        {
            $price = $time * 1700;
        }
        $price += $this->GetPriceLocation($request['delivery'], $request['distance']);
        if($request['ground-type']>5)
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

        $data = ['price' => $price];
        return view('price', $data);
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
