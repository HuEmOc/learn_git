<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great*/
/*
Khoi tao route


Route::get('hello', function () {
    echo 'hello world';
});

//truyen tham so tren route
Route::get('hoten/{ten}', function ($ten) {
    echo 'Your name is ' . $ten;
});

//truyen tham so tren route nhung co the thieu tham so
Route::get('monan/{monan?}', function ($monan = 'Ga KFC') {
    return $monan;
});

//them dieu kien cho cac tham so de an toan
Route::get('thongtin/{ten}/{tuoi}', function ($ten, $tuoi) {
    return 'chao ban ' . $ten . ' co ' . $tuoi . ' tuoi ';
})->where(['ten' => '[a-zA-Z]+', 'tuoi' => '[1-9]+']);


// truyen gia tri cho view
Route::get('call-view', function () {
    $hoten = 'Hue xinh gai';
    $view = 'admin';
    return view('view', compact('hoten', 'view'));
});

Route::get('thong-tin', function () {
    $hoten = 'Vo thi Hue';
    return view('khoapham', compact('hoten')); //compact:It creates an array containing variables and their values.
});

// Goi controller trong route
Route::get('test-controller','WelcomeController@testAction');
//vd2:
Route::get('the-gioi','WelcomeController@thegioi');

// tao dinh danh cho route
Route::get('ho-chi-minh',['as'=>'hcm',function(){
    return 'Ho Chi Minh dep nhat ten nguoi';
}]);
//vd2
Route::get('quoc-te',['as'=>'qt',function(){
    return ' day la trang tin quoc te ';
}]);

// tao nhom route
Route::group(['prefix'=>'thuc-don'],function (){
    Route::get('bun-bo',function (){
        echo 'day la trang ban bun bo';
    });
    Route::get('bun-hue',function (){
        echo 'day la trang ban bun hue';
    });
});

//vd2
Route::group(['prefix'=>'quanly'],function (){
    Route::get('tintuc',function (){
        echo 'Quan ly tin tuc';
    });
    Route::get('nhanvien', function (){
        echo 'Quan ly nhan vien';
    });
});

// mo hinh mvc trong laravel
//route -> controller : WelcomeController + action : showinfo()
Route::get('hethong','WelcomeController@showinfo');
//vd2 : mvc
Route::get('htlozi','HomeController@showBoyfriend');

//Controller
//Tham so truyen vao tren controller
Route::get('tinhtong/{so1}/{so2}','HomeController@getSum');

//View
Route::get('view','HomeController@getView');

//Truyen dl tren view sử dụng with
Route::get('view-with', 'HomeController@getViewWith');







//Blade-template
Route::get('call-view',function (){
    return view('TestBladeTemplate.winter');
});

Route::get('call-view/{str}','HomeController@getBlade');

*/



/*
//scuti_Query Builder
Route::get('query',function (){
    $data = DB::table('product')->get();
    print_r($data);
});

Route::get('eloquent','HomeController@getInformation');

//index
//Route::get('url_index','ProductController@index');
Route::group(['middleware'=>'auth'],function (){
    Route::get('url_index',['as'=>'product.index','uses'=>'ProductController@index']);

    Route::get('product_show/{id}',['as'=>'crud.show','uses'=>'ProductController@show']);
    Route::get('product_edit/{id}',['as'=>'crud.edit','uses'=>'ProductController@edit']);

//show
    Route::get('url_show/{id}','ProductController@show');
//create
    Route::get('product_create',['as'=>'product.create', 'uses'=>'ProductController@create']);
//submit
    Route::post('product_create','ProductController@store');
    Route::post('product_edit/{id}','ProductController@update');
//delete
    Route::get('product_destroy/{id}',['as'=>'crud.destroy','uses'=>'ProductController@destroy']);


});


*/



//Khoi tao route
Route::get('/', function () {
    return view('welcome');
});
//resource
Route::group(['middleware'=>'isroleadmin'],function (){
    Route::resource('product','ProductController');
});




Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
