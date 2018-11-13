<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';

    protected $fillable = ['user_id', 'title', 'description'];

    protected $guarded = ['blog_id'];

    public function getRouteKeyName()
	{
    	return 'blog_id'; // db column name

	}
}
