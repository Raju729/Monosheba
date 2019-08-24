<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/login','AdminController@login');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/','AdminController@dashboard');
    Route::get('/dashboard','AdminController@dashboard');
    Route::resource('/posts', 'PostsController');
    Route::post('/profile','AdminController@authenticate');
    Route::get('logout','AdminController@logout');
    Route::get('/contact','AdminController@contact');
    Route::get('/contact-view/{id}','AdminController@contact_view');
    Route::get('/contact-delet/{id}','AdminController@contact_delet');


    Route::get('/city','CityController@index');
    Route::post('/add-city','CityController@store');
    Route::get('/delete-city/{id}','CityController@destroy');
    Route::get('/show-edit-city/{id}','CityController@show');
    Route::post('/edit-city/{id}','CityController@edit');


    Route::get('/Psychiatrict','PsychiatricController@index');
    Route::post('/add-Psychiatrict','PsychiatricController@store');
    Route::get('/show-Psychiatrict','PsychiatricController@show');
    Route::get('/show-Psychiatrict-edit/{id}','PsychiatricController@show_edit');
    Route::get('/delete-Psychiatrict/{id}','PsychiatricController@destroy');
    Route::post('/update-Psychiatrict/{id}','PsychiatricController@update');


    Route::get('/question','QuestionController@index');
    Route::get('/show-question','QuestionController@show');
    Route::post('/add-question','QuestionController@store');
    Route::get('/delete-question/{id}','QuestionController@destroy');
    Route::get('/show-question-edit/{id}','QuestionController@show_edit');
    Route::post('/update-question/{id}','QuestionController@update');


    Route::get('/show-comment','UserCommentController@index');
    Route::get('/comment-delete/{id}','UserCommentController@destroy');


    Route::resource('/userquestions', 'UserQuestionController');


    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});


Route::get('/','FrontController@home');
Route::get('/home','FrontController@home');
Route::get('/blog','FrontController@blog');
Route::get('/contact','FrontController@contact_us');
Route::get('/show-blog/{id}','FrontController@show_blog');
Route::get('/logincontrolleradminlogin','FrontController@admin_login');
//Route::get('/search-psychiatric/{name}/{city}/{speciality}','FrontController@search');
Route::get('/search-psychiatric/{city}/{speciality}','FrontController@search');
Route::post('/psychiatric-details','FrontController@show_doctor');
Route::get('/psychiatric-details','FrontController@show_doctor');
Route::post('/contactus','FrontController@contact_store');
Route::get('/contactus','FrontController@contact_us');
Route::get('/logincontrolleradminlogindetails','FrontController@admin_login_details');
Route::get('/psychology-test','FrontController@psychology_test');
Route::post('/show-question','FrontController@show_question');
Route::get('/show-question','FrontController@psychology_test');
Route::get('/about-us','FrontController@about_us');
Route::get('/question-stream','FrontController@question_stream');
Route::get('/question-view/{id}','FrontController@question_view');
Route::get('/ask-monosheba','FrontController@ask_monosheba');
Route::post('/ask-question', 'UserQuestionController@store');
Route::post('/user-comment', 'FrontController@comment_store');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});