<?php
/**
 * Not authenticated yet...
 *
 */
Route::get('user/login', 'UserController@createLoginForm');
Route::post('user/login', 'UserController@validateLoginForme');

Route::get('user/register', 'UserController@createRegisterForm');
Route::post('user/register', 'UserController@validateRegistration');

Route::get('/', function()
{
    return View::make('login');
});

/**
 * When authenticated...
 *
 */
Route::group(array('before' => 'auth'), function()
{
    Route::get('user/logout', 'UserController@destroy');

    Route::get('home', function()
    {
        return View::make('home');
    });

    Route::get('add', 'DomainController@add');
    Route::post('add', 'DomainController@validateDomain');

});