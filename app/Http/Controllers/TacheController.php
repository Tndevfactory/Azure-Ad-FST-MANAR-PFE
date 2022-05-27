<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;
use App\Models\Tache;

class TacheController extends Controller
{
    public function apiGetTaches()
    {
        return Tache::with('user')->orderBy('created_at', 'DESC')->get();

    }

}
