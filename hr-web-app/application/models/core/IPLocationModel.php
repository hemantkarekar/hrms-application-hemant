<?php

class IPLocationModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get($ip)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.iplocation.net/?ip='. $ip);
		// curl_setopt($ch, CURLOPT_URL, 'http://ipinfo.io/'. $ip .'?token=a5c6b0686f8ad7');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

		$response = curl_exec($ch);
		curl_close($ch);

		return $response;
	}
}
