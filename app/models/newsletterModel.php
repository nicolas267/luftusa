<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class newsletterModel extends Model
{
   	protected $table = 'newsletters';

  	protected $fillable = ['email','created_at','updated_at'];
}
