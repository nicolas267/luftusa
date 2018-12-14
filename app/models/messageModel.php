<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class messageModel extends Model
{
<<<<<<< HEAD
    protected $table = 'messages';

    protected $fillable = ['name', 'email', 'subject', 'message', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'message_id'; // db column name

    }
=======
     protected $table = 'messages';

    protected $fillable = ['message'];

    protected $guarded = ['message_id','name','email','subject','message','create_at','update_at'];

    public function getRouteKeyName()
	{
    	return 'message_id'; // db column name

	}
>>>>>>> b0cfcc4db78c883d0e890fee0c09bf4d15877e1a
}
