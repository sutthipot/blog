<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Model
{
    //use Notifiable;
    protected $table = 'logins';
    protected $fillable = ['user', 'name', 'pass'];

}
