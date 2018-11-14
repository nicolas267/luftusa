<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class cartypeModel extends Model
{
    protected $table = 'car_types';

    protected $fillable = ['car_type'];

    protected $guarded = ['car_type_id'];

    public function getRouteKeyName()
	{
    	return 'car_type_id'; // db column name

	}
}
