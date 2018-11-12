<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class usertypeModel extends Model
{
    protected $table = 'user_type';

    protected $fillable = ['user_type'];

    public function getRouteKeyName()
	{
    	return 'user_types_id'; // db column name

	}
}
