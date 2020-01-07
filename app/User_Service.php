<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Service extends Model
{
    protected $table = "user_services";
    //protected $primaryKey = ['personnel_id', 'service_id', 'date'];
    public $timestamps = false;
    protected $fillable = ['service_id', 'user_id', 'date'];
}
