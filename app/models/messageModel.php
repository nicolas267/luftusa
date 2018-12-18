<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class messageModel extends Model
{
    protected $table = 'messages';

    protected $fillable = ['message'];

    protected $guarded = ['message_id','name','email','subject','message','create_at','update_at'];

    public function getRouteKeyName()
	{
    	return 'message_id'; // db column name

	}
}
