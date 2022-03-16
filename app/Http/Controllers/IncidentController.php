<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;

class IncidentController extends Controller
{
    public function incidentHome(){

        $data =[
            'incident' => 'issue in biat server ...' ,
            'date' => Carbon::now(),
            'issuer' => 'Marwa',
        ]


         return response()->json($data, 200);
    }
}
