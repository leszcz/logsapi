<?php

/* @file: Http/Controllers/ApiLogsController.php
 * @description: Controller for LogsAPI. 
 * @author: Tomasz Leszczyński <tomekleszczynski94@gmail.com>
 * @version: 1.0.13
 */

namespace leszcz\logsapi\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ApiLogsController extends Controller
{

	private $token;

	function __construct()
	{
		$this->token = sha1( 'HGAPI_'.date('Y-m-d') );
	}

	public function read(Request $request)
	{
		if( $request->has('token') && $request->input('token') == $this->token ) {
			echo file_get_contents( storage_path('logs/laravel.log') );
		} else {
			echo json_encode( ['status' => 'error', 'message' => 'Tokens not match'] );
		}
	}
}