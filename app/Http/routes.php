<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
// 	Route::get('/','AdminIndexController');
// });

Route::group(['prefix' => 'admin','namespace' => 'Admin','as' => 'admin::'],function(){
	Route::get('',['as' => 'admin.home','uses' => 'AdminIndexController@index']);

	Route::get('/saveCategory','ApiCategoryController@saveCategory'); //ajax

	Route::get('/apiManager',['as' => 'admin.apiManager','uses' => 'ApiCategoryController@index']); //后台首页
	Route::get('/apiCategory','ApiCategoryController@getApiCategory'); //ajax
	Route::get('/getCategoryRelation','ApiCategoryController@getCategoryRelation'); //ajax

	Route::get('/fieldList','FieldsController@getFieldList'); //ajax
	Route::post('/saveField','FieldsController@saveField'); //ajax

	Route::get('/userList','UserIndexController@getUserList'); //ajax

	Route::get('/errorCodeList','ErrorCodesController@getErrorCodeList'); //ajax
	Route::post('/saveErrorCode','ErrorCodesController@saveField'); //ajax

	Route::get('/httpHeaderList','HttpHeaderController@getHttpHeaderList'); //ajax
	Route::post('/saveHttpHeader','HttpHeaderController@saveField'); //ajax

	Route::get('/createApi',['as' => 'admin.createApi','uses' => 'ApiController@create']); //新建接口
	Route::get('/editApi',['as' => 'admin.editApi','uses' => 'ApiController@edit']); //修改接口
	Route::get('/deleteApi',['as' => 'admin.deleteApi','uses' => 'ApiController@destroy']); //删除接口
	Route::get('/api/{id}',['as' => 'admin.disableApi','uses' => 'ApiController@show']); //查看接口

	Route::resource('/user','UserIndexController');
	Route::resource('/fields','FieldsController');
	Route::resource('/errorCodes','ErrorCodesController');
	Route::resource('/httpHeader','HttpHeaderController');
});	