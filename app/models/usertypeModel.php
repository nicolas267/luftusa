<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class usertypeModel extends Model
{
    protected $table = 'user_types';

    protected $fillable = ['user_type'];

    public function getRouteKeyName()
	{
    	return 'user_types_id'; // db column name

	}
}
