<?php

namespace Pockup;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    
	public function contact() {
		return Contact::find($this->contact_id);
	}

}
