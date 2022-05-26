<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incident extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [

        'titre',
        'sujet',
        'description',
        'num_contrat_maintenance',
        'num_serie',
        'type_prestation',
        'issue_duration',
        'raison_issue_duration',
        'raison_assignation',
        'assignation',
        'type',
        'ask_to_close',
        'statut',
        'priorite',
        'nature',
        'origine',
        'client',
        'num_tel_contact',
        'contact_email',
        'nom_contact',
        'user_id',


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


