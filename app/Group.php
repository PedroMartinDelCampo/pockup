<?php

namespace Pockup;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
	public function category() {
		return $this->hasOne(Category::class);
	}
    
}
