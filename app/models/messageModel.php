<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class messageModel extends Model
{
    protected $table = 'messages';

    protected $fillable = ['name', 'email', 'subject', 'message', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'message_id'; // db column name

    }
}
