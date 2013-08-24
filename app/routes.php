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

    // $facebook = new Facebook(array(
    //     'appId' => Config::get('facebook.appId'),
    //     'secret' => Config::get('facebook.secret')
    // ));

    //    dd($facebook);

Route::get('/', function()
{
	return View::make('home.home');;

});

Route::get('Reservation',array('uses'=>'ReservationController@showReservation'));

Route::get('/', function()
{
	return View::make('home.home');
});




Route::get('Registration',function(){

	return View::make('Registration.registration');
});




Route::post('Routes/search',array('before'=>'csrf','uses'=>'ReservationController@postSearch'));
Route::post('Routes/Reserve',array('before'=>'csrf','uses'=>'ReservationController@postReserve'));
Route::post('Register',array('before'=>'csrf','uses'=>'HomeController@NewUser'));
Route::post('login',array('before'=>'csrf','uses'=>'HomeController@login'));


/*ADMIN*/

Route::get('admin/login',function(){
return View::make('admin.login');
});
Route::get('admin/page',function(){//viewing
return View::make('admin.page');
});
Route::get('admin/addbus',function(){
return View::make('admin.addbus');
});
Route::get('admin/addgenreport',function(){
return View::make('admin.reportbus');
});


Route::post('admin/login',function(){
	$rules=array('Email'=>'Required','password'=>'Required');
	$user=array('Email'=>Input::get('Email'),'password'=>Input::get('Password'));

	$validation=Validator::make($user,$rules);
	
		if($validation->passes()){
				if(Auth::attempt($user)){
					if(Auth::user()->Account_type=='A'){
						return Redirect::to('admin/page');
						}
				return Redirect::back()->with(array('Accnot_found'=>1));
				}
				return Redirect::back()->with(array('Accnot_found'=>1));
		}	
	
		return Redirect::back()
				->withErrors($validation);
	});

/*Addimg Bus*/
Route::post('Admin/AddBus',array('before'=>'csrf','uses'=>'AdminController@postAddBus'));

Route::post('Register',array('before'=>'csrf','uses'=>'HomeController@NewUser'));
Route::post('login',array('before'=>'csrf','uses'=>'HomeController@login'));

