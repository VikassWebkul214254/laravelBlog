<?php

use Illuminate\Support\Facades\Route;
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





Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    

    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    
    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('/blogdeatils/show/{id}', 'BlogDetails@show')->name('blog.view');
    

    // Blog Form
    Route::get('/blog', 'BlogController@form')->name('blog.form');
    Route::post('/blog', 'BlogController@register')->name('blog.perform');

    // blog Action
    Route::get('/blogaction/edit/{id}','BlogactionController@edit')->name('blog.edit');
    Route::post('/blogaction/edit/{id}','BlogactionController@update')->name('blog.update');
    Route::delete('/blogaction/destroy/{id}','BlogactionController@destroy')->name('blog.destroy');


    
    Route::post('/comment/update/{blog_id}/{customer_id}','CommentController@update')->name('comment.add');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        /**
         * blog Routes
         * 
         */

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
      
      
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});