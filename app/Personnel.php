<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = "personnels";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'prenom', 'status', 'dateNaissance', 'telephone', 'adresse', 'codePostal', 'ville', 'password'];
}
