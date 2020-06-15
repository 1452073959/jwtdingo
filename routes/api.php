<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
$api = app(\Dingo\Api\Routing\Router::class);
$api->version('v1', [
//    'prefix' => 'auth',
    'namespace' => 'App\Http\Controllers\Api'
], function ($api) {
    // 登录
    $api->post('login', 'JwtController@login');
    $api->post('register', 'JwtController@register');

    $api->get('test', 'JwtController@test');
    $api->get('version', function() {
        return response('this is version v2');
    });
});
