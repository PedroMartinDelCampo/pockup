<?php

namespace Pockup;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    
	public function contact() {
		return $this->morphOne(Contact::class, 'contactable');
	}

	public function category() {
		return $this->hasOne(Category::class);
	}

}
