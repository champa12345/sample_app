<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $guarded = ['id'];
	protected $table = 'ticket';
	public function comments()
	{
		return $this->hasMany('App\Comment', 'post_id');

	}
	// protected $table = 'ticket';
 //    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
}
