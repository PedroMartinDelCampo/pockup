<?php

namespace Pockup;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function category() {
		return $this->hasOne(Category::class);
	}
	
}
