<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/sayhello/{name?}', function($name = null)
{
	$data = ['name' => $name];
	return View::make('Hello')->with($data);
});
Route::get('/resume',function()
{
	return "this is my resume";
});

Route::get('/portfolio', function()
{
	return 'this is my portfolio';
});


Route::get('/roll-dice/{guess?}', function($guess = null)
{
	$roll = mt_rand(1,6);
	$result ='';
	if($roll==$guess){
		$result ='You are a winner!';
		}else{
		$result='Loser!';
		}
		$data = [
				  'guess'=> $guess,
				  'result' =>$result,	
				  'roll' =>$roll
				  				];
	return View::make('roll-dice')->with($data);
});