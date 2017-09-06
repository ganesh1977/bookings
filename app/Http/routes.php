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


use Illuminate\Http\Request;
//Route::get('/', 'PagesController@index');

Route::get('knowledge',function()
{
		return view('knowledge');
});

Route::get('about', 'PagesController@knowledge');

/*Route::get('knowledge',function()
{
		return view('knowledge');
});*/
Route::get('strategies', 'PagesController@strategies');
Route::get('news', 'PagesController@news');
Route::get('events', 'PagesController@events');
Route::get('resources', 'PagesController@resources');
Route::get('directories', 'PagesController@directories');
Route::get('classifieds', 'PagesController@classifieds');
Route::get('jobs', 'PagesController@jobs');
Route::get('blog', 'PagesController@blog');

Route::get('vendor_zone', 'VendorController@vendor_zone');
Route::get('user_register', 'VendorController@user_register');
Route::post('user_register_submit', 'VendorController@user_register_submit');
Route::post('user_login', 'VendorController@user_login');


Route::get('create_vendor', 'VendorController@create_vendor');

Route::get('create_media', 'VendorController@create_media');

Route::group(array('before' => 'auth'), function(){
    Route::get('create_media_p', ['middleware' => 'auth','uses'=>'VendorController@create_media_p']);     
});

Route::post('media_select_type', 'VendorController@media_select_type');

Route::get('create_produt', 'VendorController@create_product');

Route::get('error',function()
{
		return view('errors.404');
});

Route::get('sess',function(Request $r)
{
    $r->session->put('user','123');
    return $r->session->get('user');    
});



Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


Route::post('productCategory','VendorController@product_select_type');

/*Route::get("get_customer/{name}",function($name)
{
	echo "Hellow your name is ".$name;
});


Route::post("get_cus_post",function()
{
	echo "Hellow your name is POST";
});
Route::get("get_cus_post",function()
{
	echo '<form action="get_cus_post" method="post">';
	echo '<input type="text" name="uname">';
	echo '<input type="hidden" name="_token" value="'.csrf_token().'">';
		echo '<input type="hidden" name="_method" value="PUT">';
	echo '<input type="submit" value="submit">';
});
Route::put("get_cus_post",function()
{
	echo "Hellow your name is put";
});
Route::delete("get_cus_post",function()
{
	echo "Hellow your name is delete";
});

Route::get('login/{id}',function($id)
{	
	$login = App\Login::find($id);
	echo " USER NAME IS ".$login->username;
});

Route::get('orders',function()
{
	$orders = App\User::all();
	foreach($orders as $order)
	{
		$customer = App\Login::find($order->login_id);
		echo $order->firstname." - ";
		echo $customer->username."<br>";
	
	}
});

Route::get('my_page',function()
{
	return view('my_page');
});*/
Route::auth();

//Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('Auth/logout', 'Auth\AuthController@getLogout');
Route::get('user_update', 'VendorController@user_register');
Route::get('user_register_reg', 'VendorController@user_register_reg');