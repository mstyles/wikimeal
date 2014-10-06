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

Route::get('/', 'MealController@mealPicker');

Route::get('edit', function()
{
    $meals = Meal::all();
    return View::make('edit')->with(array('meals' => $meals));
});

Route::post('add', 'MealController@add');

Route::post('remove', 'MealController@remove');

Route::get('calendar', function()
{
    return View::make('calendar');
});

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});
