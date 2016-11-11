<?php

namespace Pockup;

class Endpoint {

	const BASE_URL = 'api/';

	public $url;
	public $method;
	public $signature;
	private static $all = [];

	public static function all()
	{
		return collect(self::$all)->map(function($endpoint) {
			$endpoint->url = url(self::BASE_URL . $endpoint->url);
			return $endpoint;
		});
	}

	public static function isEmpty()
	{
		return count(self::$all) == 0;
	}

	public function __construct($url, $method, $signature)
	{
		$this->url = $url;
		$this->method = $method;
		$this->signature = $signature;

		self::load($this);
	}

	private static function load(Endpoint $endpoint) {
		self::$all[] = $endpoint;
	}

}