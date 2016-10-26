<?php

namespace Pockup;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
	public function contactable() {
		return $this->morphTo();
	}

}
