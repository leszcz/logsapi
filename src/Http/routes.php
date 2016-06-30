<?php

/* @file: Http/routes.php
 * @description: Routing for LogsApi Controller
 * @author: Tomasz Leszczyński <tomekleszczynski94@gmail.com>
 * @version: 1.0.13
 */

Route::post('api/get-logs', 'ApiLogsController@read');