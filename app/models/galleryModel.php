<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class galleryModel extends Model
{
    protected $table = 'galleries';

    protected $fillable = ['image'];

    public function getRouteKeyName()
	{
    	return 'gallery_id'; // db column name

	}
}
