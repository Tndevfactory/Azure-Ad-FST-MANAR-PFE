<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Models\Validation;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiValidationsAll()
    {
        return 'apiValidationsAll';
    }

}
