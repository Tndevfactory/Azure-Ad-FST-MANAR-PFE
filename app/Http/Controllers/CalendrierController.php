<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalendrierRequest;
use App\Http\Requests\UpdateCalendrierRequest;
use App\Models\Calendrier;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiCalendrierAll()
    {
        return 'calendrier all';
    }

}
