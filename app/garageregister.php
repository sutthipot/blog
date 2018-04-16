<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class garageregister extends Model
{
    //
    protected $fillable = ['user_ID', 'tel', 'description', 'latitude','longitude','status'];
}
