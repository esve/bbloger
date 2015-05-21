<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function getUsers()
    {
        $users=User::All(); // select * from users
        return View::make('userhome')->with('bloggers',$users);
    }

    public function getHome()
    {
        $blogs = Auth::user()->hasWritten()->get();
        return View::make('home')->with('blogs',$blogs);
    }

    public function test()
    {
    return View::make('test');
    }
}
