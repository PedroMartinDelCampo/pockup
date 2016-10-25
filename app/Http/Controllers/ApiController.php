<?php

namespace Pockup\Http\Controllers;

use Pockup\Place;
use Pockup\Group;
use Pockup\Event;

class ApiController extends Controller
{
    
	public function places()
	{
		return response()->json(Place::all()->map(function($place) {
			$place->contact = $place->contact();
			return $place;
		}));
	}

	public function groups()
	{
		return response()->json(Group::all());
	}

	public function events()
	{
		return response()->json(Event::all());
	}

}
