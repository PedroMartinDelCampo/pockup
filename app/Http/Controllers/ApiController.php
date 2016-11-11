<?php

namespace Pockup\Http\Controllers;

use Hash;
use Validator;
use Pockup\Place;
use Pockup\Group;
use Pockup\Event;
use Pockup\Category;
use Pockup\User;
use Pockup\Http\Requests\RegisterUserRequest;
use Pockup\Http\Requests\AccessRequest;
use Illuminate\Http\Request;

class ApiController extends Controller
{

	public function index()
	{
		return view('api')->withErrors([]);
	}

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
				$place->contact = $place->contact()->get();
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

	public function registerUser(Request $request)
	{

		$rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        	return response()->json([
				'success' => false
			]);
        }

		$user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        if ($user->save()) {
        	return response()->json([
    			'success' => true,
    			'id' => $user->id
    		]);
        }
        return response()->json([
			'success' => false
		]);
	}

	public function access(AccessRequest $request)
	{
		$user = User::where('email', $request->email)->get()->first();
		if ($user && Hash::check($request->password, $user->password)) {
			return response()->json([
				'success' => true,
				'id' => $user->id
			]);
		}
		return response()->json([
			'success' => false
		]);
	}

}
