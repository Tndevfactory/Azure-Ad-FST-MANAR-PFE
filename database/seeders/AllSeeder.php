<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeding users
        
        DB::table('users')->insert([

            [
                'fname' => 'Oumayma',
                'lname' => 'Ben khlif',
                'email' => 'oumayma@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'admin',
                'address' => 'tunis',
                'phone1' => '55385666',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'fname' => 'Marwa',
                'lname' => 'Hasnaoui',
                'email' => 'marwa@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user',
                'address' => 'manouba',
                'phone1' => '99385666',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'fname' => 'Malek',
                'lname' => 'Ben farhat',
                'email' => 'malek@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user',
                'address' => 'zahra',
                'phone1' => '99385666',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          

        ]);


     
        // seeding taches
        DB::table('taches')->insert([

            [
                'sujet' => 'visite curative',
                'compte' => 'admin@app.com',
                'date_echeance' => date('Y-m-d H:i:s'),
                'date_prochaine_echeance' => date('Y-m-d H:i:s'),
                'date_contrat' => date('Y-m-d H:i:s'),
                'code_contrat' => '2345678',
                'contrat_maintenance' => 'annuel',
                'date_appel' => date('Y-m-d H:i:s'),
                'date_tache' => date('Y-m-d H:i:s'),
                'type' => 'ouverte',
                'user_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'sujet' => 'maintenance',
                'compte' => 'admin@app.com',
                'date_echeance' => date('Y-m-d H:i:s'),
                'date_prochaine_echeance' => date('Y-m-d H:i:s'),
                'date_contrat' => date('Y-m-d H:i:s'),
                'code_contrat' => '2345678',
                'contrat_maintenance' => 'annuel',
                'date_appel' => date('Y-m-d H:i:s'),
                'date_tache' => date('Y-m-d H:i:s'),
                'type' => 'ouverte',
                'user_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          

        ]);
         // seeding interventions
         DB::table('interventions')->insert([

            [
                'sujet' => 'intervention technique',
                'compte' => 'admin@app.com',
                'date_echeance' => date('Y-m-d H:i:s'),
                'date_prochaine_echeance' => date('Y-m-d H:i:s'),
                'date_contrat' => date('Y-m-d H:i:s'),
                'code_contrat' => '2345678',
                'contrat_maintenance' => 'annuel',
                'date_appel' => date('Y-m-d H:i:s'),
                'date_intervention' => date('Y-m-d H:i:s'),
                'type' => 'ouverte',
                'user_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'sujet' => 'intervention maintenance',
                'compte' => 'admin@app.com',
                'date_echeance' => date('Y-m-d H:i:s'),
                'date_prochaine_echeance' => date('Y-m-d H:i:s'),
                'date_contrat' => date('Y-m-d H:i:s'),
                'code_contrat' => '2345678',
                'contrat_maintenance' => 'annuel',
                'date_appel' => date('Y-m-d H:i:s'),
                'date_intervention' => date('Y-m-d H:i:s'),
                'type' => 'ouverte',
                'user_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          

        ]);


          // seeding incidents
          DB::table('incidents')->insert([

            [
                'titre' => 'coupure serveur',
                'sujet' => 'panne',
                'description' => 'chute de tension',
                'num_contrat_maintenance' => '2345678',
                'num_serie' => '678906',
                'type_prestation' => 'payante',
                'issue_duration' => '4',
                'raison_issue_duration' => 'retard',
                'raison_assignation' => null,
                'assignation' => null,
                'type' => 'ouvert',
                'ask_to_close' => 'non',
                'statut' => 'actif-en-cours',
                'priorite' => 'haute',
                'nature' => 'incident',
                'origine' => 'chute de tension',
                'num_tel_contact' => '55567890',
                'contact_email' => 'lotfi@gmail.com',
                'nom_contact' => 'lotfi',
                'user_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'titre' => 'config bios',
                'sujet' => 'panne',
                'description' => 'parametrage bios',
                'num_contrat_maintenance' => '2345678',
                'num_serie' => '678906',
                'type_prestation' => 'payante',
                'issue_duration' => '4',
                'raison_issue_duration' => 'retard',
                'raison_assignation' => null,
                'assignation' => null,
                'type' => 'ouvert',
                'ask_to_close' => 'non',
                'statut' => 'actif-en-cours',
                'priorite' => 'haute',
                'nature' => 'incident',
                'origine' => 'chute de tension',
                'num_tel_contact' => '55567890',
                'contact_email' => 'lotfi@gmail.com',
                'nom_contact' => 'lotfi',
                'user_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          

        ]);
    }
}
