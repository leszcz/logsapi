<?php

Route::post('api/logs', 'ApiLogsController@read');

Route::get('api/get_token', 'ApiLogsController@dumpToken');