<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Set mass-assignable fields
    protected $fillable = ['title', 'content', 'category', 'slug'];

    /* Change the key for our model to use Route Model Binding 
    instead of using the id we're using the slug field, it needs to be unique*/
    public function getRouteKeyName()
	{
	    return 'slug';
	}
}
