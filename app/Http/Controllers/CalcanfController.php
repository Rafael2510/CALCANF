<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcanfController extends Controller
{
    public function hourAd(Request $request)
    {
        $data = $request->all();
        
        $receiveF =  (($baseSal / ($data['cargaHoraria']* 5)) * $data['horasFeriado'] * 2); 

       $noturnHour = $data['qtdPlantoes'] *(60 / 52.5);

        $receiveAd = (($baseSal / ($data['cargaHoraria']* 5)) * 20/100 * $noturnHour); 
    
        $receiveF = number_format($receiveF, 2, '.', '');
        $receiveAd = number_format($receiveAd, 2, '.', '');
       return view('welcome')
            ->with(compact('receiveF', 'receiveAd'));
    }


    // public function noturnAd(Request $request)
    // {
    //     $noturnHour = $hour *(60 / 52.5);

    //     $receive = (($baseHour / $mensalHour) * 20/100 * $noturnHour); 

    //     return $receive;
    // }
}

// public function getAll($return = 'get', $paginate = '*')
//     {
//         if(strpos($paginate, ','))
//         {
//             list($param1, $param2) = explode(',', $paginate);
//             str_replace(' ', '', $param1);
//             str_replace(' ', '', $param2);

//             return $this->latest()
//                     ->$return($param1, $param2);
//         }

//         return $this->latest()
//                     ->$return($paginate);
//     }