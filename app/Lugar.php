<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugares';

    public function costos() {
    	return $this->hasMany(App\Costo::class, 'costos');
    }

}
