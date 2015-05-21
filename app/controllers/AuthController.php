<?php

class AuthController extends \BaseController
{

    public function userSignup()
    {
        //Logic of new user creation
        $signup_rules = array(
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'pwd' => 'required|min:6',
            'cpwd' => 'required|same:pwd',
            'username'=>'required| alpha_num |unique:users,username|min:5');

        $validation =Validator::make(Input::all(),$signup_rules);
        //if the validation fails, return to the index page with first error message
        if($validation->fails())
        {
            return Redirect::to('/')->with('error',$validation->errors()->first());
        }
        else
        {
            $user = new User;
            $user->name = Input::get('name');
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('pwd'));
            $user->email = Input::get('email');
            $user->save();

        }
        $profile=new Profile;
        $profile->userid=$user->id;
        $profile->about='';
        $profile->save();

        Mail::send('mailers', array('user'=>$user), function($message)
        {
            $message->to(Input::get('email'),Input::get('name'))->subject('Welcome to BBloger!');
        });

        return Redirect::to('/')->with('error','User Created, Please Login');



    }

    public function userLogin()
    {
        $credentials=Input::only('username','password');
        if (Auth::attempt($credentials))
        {
            return Redirect::intended('/home');
        }
        return Redirect::to('/');

    }

    public function userLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

}
