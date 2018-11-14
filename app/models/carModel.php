<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carModel extends Model
{
    protected $table = 'cars';

	protected $fillable = ['car_model_id', 'car_version_id', 'car_year_id'];

    public function getRouteKeyName()
	{
    	return 'car_id'; // db column name

	}
}
