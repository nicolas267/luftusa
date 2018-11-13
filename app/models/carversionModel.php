<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carversionModel extends Model
{
    protected $table = 'car_versions';

    protected $fillable = ['car_version'];

    protected $guarded = ['car_version_id'];

    public function getRouteKeyName()
	{
    	return 'car_versions_id'; // db column name

	}
}
