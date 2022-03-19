<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
   
   public function IncidentAll(){

    $data = [

        'incident' => 'inc',
        'date' => 'now',
    ];

        return response()->json($data,200);
    }
}
