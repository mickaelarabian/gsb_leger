<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'budget', 'siege_id'];
}
