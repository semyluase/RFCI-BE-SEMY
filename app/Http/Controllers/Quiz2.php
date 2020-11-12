<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Quiz2 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $n = 8;
        $counter = 0;
        $counter = $counter++;
        $data = '{"X-RANDOM":"'.bin2hex(random_bytes($n)).'", "counter":"'.$counter.'"}';
        Log::info($data);
        return view('quiz2',['angka' => '','jumlah' => '']);
    }

    
}
