<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class caryearModel extends Model
{

    protected $table = 'car_years';

    protected $fillable = ['start_years', 'end_years'];

    protected $guarded = ['car_years_id'];

    public function getRouteKeyName()
	{
    	return 'car_years_id'; // db column name

	}
}
