<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'start',
        'end',
        'medecin_id',
        'patient_id',
        'date_naissence',
        'Adresse',
        'phone',
        'CIN',
        'color',
        'rendering',
        'validee',
        'RDV',
        'duree',
        'email',
        'Caisse_Assurance_sociale',
        'Caisse_Assurance_sociale_N',
        'Mutuelle',
        'Mutuelle_N',
        'Motifs_de_consultation',
        'Types_de_consultation',
        'Allergie',
        'Antécédent_médicaux',
        'Provenance_Médecin_traitant',
        'Lien_parenter',
        'Adresse_parenter',
        'tel_parenter',
        'profession',

        ];
}
