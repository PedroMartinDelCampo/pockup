<?php

namespace Pockup\Http\Controllers;

use Pockup\Place;
use Pockup\Group;
use Pockup\Event;
use Pockup\User;

use Pockup\Http\Requests\RegisterUserRequest;

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

	public function registerUser(RegisterUserRequest $request)
	{
		$user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();
        return $user;
	}

}
