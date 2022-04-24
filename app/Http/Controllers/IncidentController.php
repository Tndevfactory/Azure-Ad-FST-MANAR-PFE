<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;

class IncidentController extends Controller
{

    public function apiIncidentsAll()
    {
        return Incident::orderBy('created_at','DESC')->get()->toArray();

    }


    public function apiIncidentCreate(Request $request)
    {
       

        $incident = new Incident;
 
        $incident->name = $request->name;
        $incident->sujet = $request->sujet;
        $incident->description = $request->description;
        $incident->num_contrat = $request->num_contrat;
        $incident->num_serie_machine = $request->num_serie_machine;
        $incident->type_prestation = $request->type_prestation ;
        $incident->assignation = $request->assignation;
        $incident->raison_assignation = $request->raison_assignation;
        $incident->statut = $request->statut;
        $incident->priorite = $request->priorite;
        $incident->nature = $request->nature;
        $incident->type = $request->nature;
        $incident->origine = $request->origine;
        $incident->client = $request->client;
        $incident->contact_tel = $request->contact_tel;
        $incident->contact_email = $request->contact_email;
        $incident->contact_name = $request->contact_name;
        $incident->created_at= $request->created_at;
        $incident->user_id= $request->user_id;
        $incident->save();

        $data = [
            "request_name" => 'saved with success',
            "response_code" => 200,
        ];

        return response()->json($data, 200);


    }

    public function apiIncidentUpdate(Request $request)
    {
       
       $incident = Incident::find($request->data['id']);

        $incident->name = $request->data['name'];
        $incident->sujet = $request->data['sujet'];
        $incident->description = $request->data['description'];
        $incident->num_contrat = $request->data['num_contrat'];
        $incident->num_serie_machine = $request->data['num_serie_machine'];
        $incident->type_prestation = $request->data['type_prestation'] ;
        $incident->assignation = $request->data['assignation'];
        $incident->raison_assignation = $request->data['raison_assignation'];
        $incident->statut = $request->data['statut'];
        $incident->priorite = $request->data['priorite'];
        $incident->nature = $request->data['nature'];
        $incident->type = $request->data['nature'];
        $incident->origine = $request->data['origine'];
        $incident->client = $request->data['client'];
        $incident->contact_tel = $request->data['contact_tel'];
        $incident->contact_email = $request->data['contact_email'];
        $incident->contact_name = $request->data['contact_name'];
        
        $incident->save();


        $data = [
            "update_record" => 'updated with success',
            "response_code" => 200,
        ];

        return response()->json($data, 200);


    }

    public function apiIncidentDelete(Request $request): \Illuminate\Http\JsonResponse
    {
        $output = new ConsoleOutput();
        $output->writeln('ch debug apiIncidentDelete');
        $output->writeln($request);

        $del=Incident::destroy($request->id);

        $data = [
            "delete_record" => $del,
            "response_code" => 200,
        ];

        return response()->json($data, 200);


    }


}
