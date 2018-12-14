<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class favoriteModel extends Model
{
    protected $table = 'favorites';

    protected $fillable = ['user_id', 'car_part_id'];

    protected $guarded = ['favorite_id'];

    public function getRouteKeyName()
	{
    	return 'favorite_id'; // db column name

	}
}
