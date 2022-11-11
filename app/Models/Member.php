<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['n_patente','raison_social','responsable','fonction','tel','fax','email','site_web','adresse','secteur','sous_secteur','pdts','n_carte_adhérent','historique','pack'];
}
