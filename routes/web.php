<?php

use App\customer;
use App\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Notifications\contactNotification;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Notification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('category/create','CategoryController@create');
Route::get('category','CategoryController@index');
Route::post('category','CategoryController@store');
Route::get('category/{id}/edit','CategoryController@edit');
Route::post('category/delete/{id}','CategoryController@destroy');
Route::post('category/{id}','CategoryController@update');
Route::Post('/search',function()
{
    // dd(request('item'));
    $find = request('item');
    if($find !='')
    {
        $user=customer::where('name','LIKE','%'.$find.'%')->get();
        // $user->appends(array(
        //     'find'=>request('item'),
        // ));
        // dd($user);
        if(count($user)>0)
        {
            return view('customer.search',
            ['user'=>$user]);
        }
    }
});

Route::resource('product', 'ProductController');
Route::resource('customer', 'customerController');
Route::resource('address', 'addressController');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact/create','ContactController@create');
//  Route::post('/contact','ContactController@store');
Route::post('/contact','ContactController@store');
// function()
// {
//     $data['name']= 'alex';
//     $data['email']= 'alex@gmail.com';

//    $user= User::find(1);
//    dd($user);
// Notification::send($user, new contactNotification($data));
// return redirect('/');
// // }
// );
Route::get('contact_notification', function()
{
   $user= User::find(1);
   $noti_data = [];
    foreach($user->unreadNotifications as $data)
    {
       $noti_data[]=$data->data;
        // dump($data);
    }
    // dd($noti_data);
    $noti = $user->notifications()->where('id','4027bdcc-b5a7-49dc-aa80-29c39c029259')->first();
    dd($noti->markAsRead());
}
);

