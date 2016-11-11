<?php

namespace Pockup;

class API {

	public static function getInstance()
	{
		return self::$instance == null ?
				(self::$instance = new API()) :
				self::$instance;
	}

	public static function toJson()
	{
		if (Endpoint::isEmpty()) {
			self::registerEndpoints();
		}
		return json_encode(Endpoint::all());
	}

	private static function registerEndpoints()
	{
		$categories = new Endpoint('category', 'GET', []);
		$category = new Endpoint('category/{id}', 'GET', [
			'id' => 'number'
		]);
	}

}