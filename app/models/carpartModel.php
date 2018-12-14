<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carpartModel extends Model
{
    protected $table = 'car_parts';

    protected $fillable = ['part', 'car_id', 'price', 'stock'];

    protected $guarded = ['car_part_id'];

    public function getRouteKeyName()
	{
    	return 'car_part_id'; // db column name

	}

	public function Orders_products()
    {
        return $this->belongsTo('App\models\Orders_products');
    }
}
