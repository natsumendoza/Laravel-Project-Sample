<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

	// fill only body, protecting you from filling another field
	protected $fillable = ['body'];

	public function by(User $user) {
		$this->user_id = $user->id;
	}
    
	public function card() {

		return $this->belongsTo(Card::class);

	}

	public function user() {

		return $this->belongsTo(User::class);

	}

}
