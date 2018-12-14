<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class orders_productsModel extends Model
{
    protected $table = 'orders_products';
 	protected $fillable = ['order_product_id','order_id','cart_part_id','quantity','subtotal','created_at','updated_at'];

    public function Orders()
    {
        return $this->belongsTo('App\models\ordersModel');
    }

    public function cart_part()
    {
        return $this->belongsTo('App\models\carpartModel');
    }
}
