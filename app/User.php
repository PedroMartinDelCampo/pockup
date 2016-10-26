<?php

namespace Pockup;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
	public function places() {
		return $this->hasMany(Place::class);
	}

	public function role() {
		return $this->role;
	}

}
