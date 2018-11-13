<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class partModel extends Model
{
    protected $table = 'parts';

    protected $fillable = ['part'];

    protected $guarded = ['part_id'];

    public function getRouteKeyName()
	{
    	return 'part_id'; // db column name

	}
}
