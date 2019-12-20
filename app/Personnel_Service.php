<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel_Service extends Model
{
    protected $table = "personnel_services";
    //protected $primaryKey = ['personnel_id', 'service_id', 'date'];
    public $timestamps = false;
    protected $fillable = ['service_id', 'personnel_id', 'date'];
}
