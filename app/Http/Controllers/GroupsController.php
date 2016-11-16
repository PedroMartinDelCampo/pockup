<?php

namespace Pockup\Http\Controllers;

use Illuminate\Http\Request;

use Pockup\Http\Requests;

use Pockup\Group;

use Validator;

class GroupsController extends Controller
{
    
	public function create(Request $request)
	{

		$rules = [
            'user' => 'required|exists:users,id',
            'name' => 'required|unique:groups',
            'category' => 'required|exists:categories,id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        	return response()->json([
				'success' => false
			]);
        }

		$group = new Group();
		$group->user_id = $request->user;
		$group->name = $request->name;
		$group->description = $request->description;
		$group->category_id = $request->category;
		$group->is_lucrative = $request->is_lucrative;
		if ($group->save()) {
			return response()->json([
				'success' => true
			]);
        }
		return response()->json([
			'success' => false
		]);
	}

	public function destroy(Group $group, Request $request)
	{
		if ($request->user = $group->user_id) {
			$group->delete();
			return response()->json([
				'success' => true
			]);
		}
		return response()->json([
			'success' => false
		]);
	}

}
