<?php

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ApiLogsController extends Controller
{

	private $token;
	const FILE = storage_path('logs/laravel.log');

	function __construct()
	{
		$this->token = bcrypt( 'HGAPI_'.date('Y-m-d') );
	}

	public function read(Request $request)
	{
		if( $request->has('token') && $request->input('token') == $this->token ) 
			return file_get_contents(self::FILE);
	}

	public function dumpToken()
	{
		dump($this->token);
	}
}