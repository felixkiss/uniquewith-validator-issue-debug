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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('own-rule/{value}', function($value)
{
    $input = [
        'foo' => $value,
    ];
    $rules = [
        'foo' => 'required|foo_bar',
    ];
    $validator = Validator::make($input, $rules);

    if ($validator->fails())
    {
        echo "fail";
    }
    else
    {
        echo "success";
    }
});

Route::get('unique-with/{company}/{model}', function($company, $model)
{
    $input = compact('company', 'model');
    $rules = [
        'company' => 'required|unique_with:phones,model|only_apple',
        'model'   => 'required',
    ];
    $validator = Validator::make($input, $rules);

    if ($validator->fails())
    {
        echo "fail";
    }
    else
    {
        $phone = new Phone($input);
        $phone->save();

        return $phone;
    }
});
