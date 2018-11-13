<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carmodelModel extends Model
{
    protected $table = 'car_models';

    protected $fillable = ['car_model'];

    protected $guarded = ['car_model_id'];

    public function getRouteKeyName()
	{
    	return 'car_model_id'; // db column name

	}
}
