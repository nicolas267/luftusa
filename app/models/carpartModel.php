<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carpartModel extends Model
{
    protected $table = 'car_parts';

    protected $fillable = ['car_part'];

    protected $guarded = ['car_part_id'];

    public function getRouteKeyName()
	{
    	return 'car_part_id'; // db column name

	}
}