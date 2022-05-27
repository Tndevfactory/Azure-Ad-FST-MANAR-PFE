<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Incident;
use App\Models\Validation;
use App\Models\Intervention;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;


class ValidationController extends Controller
{
   
    public function apiGetIncidentForClosing()
    {
        return Incident::with('user')->where('ask_to_close','1')->orderBy('created_at', 'DESC')->get();
    }

    public function apiCloseIncidentByAdmin()
    {
        return 'apiCloseIncidentByAdmin';
    }

    public function apiCloseTache()
    {
        return 'apiCloseTache';
    }
    public function apiCloseIntervention(Request $request)
    {
        $output = new ConsoleOutput();
        $output->writeln('ch debug apiCloseIntervention');
        $output->writeln($request);

        $intervention = Intervention::find($request->id);
        $intervention->type = '1';
        $intervention->save();
        
        $data = [
            "update_record" => 'updated with success',
            "response_code" => 200,
            "response" => $request->id,
        ];
    
        return response()->json($data, 200);
    }
}
