<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class newsletterModel extends Model
{
    protected $table = 'newsletter';

    protected $fillable = ['email'];
}
