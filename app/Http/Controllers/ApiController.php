<?php

namespace Pockup\Http\Controllers;

use Pockup\Place;
use Pockup\Group;
use Pockup\Event;
use Pockup\Category;
use Pockup\User;

use Pockup\Http\Requests\RegisterUserRequest;
use Pockup\Http\Requests\AccessRequest;

class ApiController extends Controller
{

	public function categories()
	{
		return response()->json(Category::all());
	}

	public function category(Category $category)
	{
		return response()->json($category);
	}
    
	public function places(Category $category)
	{
		return response()->json(
			Place::where('category_id', $category->id)
				->get()->map(function($place) {
				$place->contact = $place->contact();
				return $place;
			})
		);
	}

	public function groups(Category $category)
	{
		return response()->json(
			Group::where('category_id', $category->id)->get()
		);
	}

	public function events(Category $category)
	{
		return response()->json(
			Event::where('category_id', $category->id)->get()
		);
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

	public function access(AccessRequest $request)
	{
		$user = User::where('email', $request->email)->get()->first();
		if ($user && Hash::check($request->password, $user->password)) {
			return response()->json([
				'success' => 'Acceso concedido'
			]);
		}
		return response()->json([
			'error' => 'Credenciales invalidas'
		]);
	}

}
