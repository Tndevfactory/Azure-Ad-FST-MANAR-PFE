<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'sujet',
        'compte',
        'date_echeance',
        'date_prochaine_echeance',
        'date_contrat',
        'code_contrat',
        'contrat_maintenance',
        'date_appel',
        'date_tache',
        'type',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
