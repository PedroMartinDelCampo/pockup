<?php

namespace Pockup\Http\Controllers;

use Illuminate\Http\Request;

use Pockup\Http\Requests;

use Pockup\Event;

class EventsController extends Controller
{
    
	public function destroy(Event $event, Request $request)
	{
		if ($request->user == $event->user_id) {
			$event->delete();
			return response()->json([
				'success' => true
			]);
		}
		return response()->json([
			'success' => false
		]);
	}

}
