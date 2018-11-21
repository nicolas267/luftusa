<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carversionModel extends Model
{
    protected $table = 'car_versions';

    protected $fillable = ['car_version'];

    public function getRouteKeyName()
	{
    	return 'car_version_id'; // db column name

	}
}

