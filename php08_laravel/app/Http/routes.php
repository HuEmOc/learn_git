<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::Controllers(array("auth"=>"Auth\AuthController"));
//backend
Route::group(array("prefix"=>"admin","middleware"=>"auth"),function(){
	Route::get("home",function(){
		return view("backend.home");
	});
	//category news
	Route::get("category_news","Backend\CategoryNewsController@list_category_news");
	//delete category news
	Route::get("category_news/delete/{pk_category_news_id}","Backend\CategoryNewsController@delete");
	//-------------
	//list user
	Route::get("user","Backend\UserController@list_user");
	//delete user
	Route::get("user/delete/{id}","Backend\UserController@delete_user");
	//edit user
	Route::get("user/edit/{id}","Backend\UserController@edit");
	//do edit user
	Route::post("user/edit/{id}","Backend\UserController@do_edit");
	//add user
	Route::get("user/add","Backend\UserController@add");
	//do add user
	Route::post("user/add","Backend\UserController@do_add");
	//list news
	Route::get("news","Backend\NewsController@list_news");
	//edit news
	Route::get("news/edit/{id}","Backend\NewsController@edit");
	//do edit new
	Route::post("news/edit/{id}","Backend\NewsController@do_edit");
	//add news
	Route::get("news/add","Backend\NewsController@add");
	//do add news
	Route::post("news/add","Backend\NewsController@do_add");
	//delete
	Route::get("news/delete/{id}","Backend\NewsController@delete");
	//-------------	
});
//login
Route::get("login",function(){
	//echo Hash::make("123");
	return view("backend.login");
});
Route::post("login",function(){	
	$email = Request::get("email");
	$password = Request::get("password");
	//kiem tra dang nhap
	if(Auth::attempt(array("email"=>$email,"password"=>$password)))
		return redirect("admin/home");
	else
		return redirect("login");
});
//logout
Route::get("logout",function(){
	Auth::logout();
	return redirect("login");
});
//------------
//frontend
Route::get('/', function () {
    //return view('welcome');
    return view("frontend.home");
});
//detail news
Route::get('detail/{pk_news_id}',function($pk_news_id){
	$data["pk_news_id"] = $pk_news_id;
	return view("frontend.detail",$data);
});
//category news
Route::get('category/{pk_category_news_id}',function($pk_category_news_id){
	$data["pk_category_news_id"] = $pk_category_news_id;
	return view("frontend.category",$data);
});
//------------