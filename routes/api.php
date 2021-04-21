<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});  */


Route::get('phonelogin', 'LoginController@Login');
Route::post('posttransaction', 'createTransaction@posttransaction');
Route::post('register', 'RegistrationController@Register');

Route::get('send', 'NotifyController@index');

/* Route::get('mail', function () {
    $user = App\Registration::find(1);

    return (new App\Notifications\AlertUsers($user))
                ->toMail($user->email);
}); */

