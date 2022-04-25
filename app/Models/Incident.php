<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [

        'name',
        'sujet',
        'description',
        'num_contrat',
        'num_serie_machine',
        'type_prestation',
        'issue_duration',
        'raison_issue_duration',
        'raison_assignation',
        'assignation',
        'type',
        'statut',
        'priorite',
        'nature',
        'origine',
        'client',
        'contact_tel',
        'contact_email',
        'contact_name',
        'user_id',


    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}


