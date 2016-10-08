<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SavePlaceRequest;
use App\Place;

class PlacesController extends Controller
{
    
	public function index() {
        return view('user.places.index')
                    ->withPlaces(Place::all());
    }

	public function showRegisterPlaceForm() {
		return view('user.places.new')->withPlace(new Place);
	}

	public function registerPlace(SavePlaceRequest $request) {
		$place = new Place;
		$place->lat = $request->lat;
		$place->long = $request->long;
		$place->address = $request->address;
		$place->save();
		return redirect('/home');
	}

}
