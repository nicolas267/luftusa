<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class usertypeModel extends Model
{
    protected $table = 'userstype';

    protected $fillable = ['users_type'];

    protected $guarded = ['users_type_id'];

    public function getRouteKeyName()
	{
    	return 'users_type_id'; // db column name

	}
}
