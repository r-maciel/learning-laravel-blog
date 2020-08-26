<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Set mass-assignable fields
    protected $fillable = ['title', 'content', 'category', 'slug'];

    /* Change the key for our model to use Route Model Binding 
    instead of using the id we're using the slug field of our DB, it needs to be unique so instead of using $something->id
    in our routes we're gonna pass $something->slug*/
    public function getRouteKeyName()
	{
	    return 'slug';
	}
}
