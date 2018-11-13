<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class usersModels extends Model
{
    protected $table = 'users';

    protected $fillable = ['names', 'lastnames', 'email', 'password', 'user_type_id'];

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
