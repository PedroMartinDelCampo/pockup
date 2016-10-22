<?php

namespace Pockup;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    
	function places() {
		return $this->hasMany(Place::class);
	}

}
