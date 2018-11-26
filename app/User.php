<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';
    
    protected $table = 'users';

    protected $fillable = ['name', 'lastname', 'email', 'password', 'user_type_id'];

    protected $guarded = ['user_id'];

    public function getRouteKeyName()
    {
        return 'user_id'; // db column name

    }

    public function users_type()
    {
        return $this->belongsToMany('App\models\usertypeModel');
    }
}
