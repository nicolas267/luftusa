<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_products extends Model
{
    protected $table = 'orders_products';
 	protected $fillable = ['order_product_id','order_id','cart_part_id','quantity','subtotal'];

    public function Orders()
    {
        return $this->belongsTo('App\models\Orders');
    }

    public function cart_part()
    {
        return $this->belongsTo('App\models\carpartModel');
    }
}
