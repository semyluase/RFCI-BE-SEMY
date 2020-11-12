<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Quiz1 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('quiz1',['angka' => '','jumlah' => '']);
    }

    public function swap(Request $request){
        $datapush = $request->input('input-data');
        $angka = explode(" ", $datapush);
        $data = "";
        $jumlah = 0;

        $n = sizeof($angka);
        for($i = 0; $i < $n; $i++) {
            $swapped = False;
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($angka[$j] > $angka[$j+1]) { 
                    $t = $angka[$j]; 
                    $angka[$j] = $angka[$j+1]; 
                    $angka[$j+1] = $t; 
                    $swapped = True;
                }
            }
            if ($swapped == False) 
                break;
        }

        for ($i = 0; $i < $n; $i++) { 
            if ($data == null) {
                $data = $angka[$i];
            } else {
                $data = $data." ".$angka[$i];
            }
        }

        $angka = explode(" ", $data);

        return view('quiz1')->with(['angka' => $angka,'jumlah' => $jumlah]);
    }
}
