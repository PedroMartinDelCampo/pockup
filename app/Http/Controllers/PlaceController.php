<?php

namespace Pockup\Http\Controllers;

use Illuminate\Http\Request;

use Pockup\Http\Requests\SavePlaceRequest;

use Auth;
use Storage;

use Pockup\Contact;
use Pockup\Place;

class PlaceController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('place.index')
                ->withPlaces(
                    Auth::user()->places()->get()
                );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('place.create')
                ->withPlace(new Place);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePlaceRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->contact_name;
        $contact->email = $request->contact_email;
        $contact->phone = $request->phone;

        $place = new Place();
        $place->contact_id = $contact->id;
        $place->name = $request->name;
        $place->lat = $request->lat;
        $place->long = $request->long;
        $place->address = $request->address;
        $place->description = $request->description;
        $place->general_price = $request->general_price ?: 0;
        $place->photo = '';
        $place->contact_id = 0;

        Auth::user()->places()->save($place);
        $place->contact()->save($contact);
        $photo = $request->file('photo');
        $path = 'places/' . $place->id . '.' ;
        $path .= $photo->getClientOriginalExtension();
        Storage::disk('public')->put(
            $path, file_get_contents($photo->getRealPath())
        );
        $place->photo = url(Storage::url($path));
        $place->save();
        return redirect()->route('place.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SavePlaceRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
