<?php

class ProfileController extends \BaseController {

  public function getProfile()
  {
      return View::make('profile');
  }

    public function editProfile()
    {
        return View::make('editProfile');
    }

    public function updateProfile()
    {
        $file = Input::file('pic');
        $profile = Profile::Where('userid','=',Auth::user()->id)->first();
        $profile->about = Input::get('about');

        $fileName = Str::random(8);
        $extension = $file->getClientOriginalExtension();
        //$extension=Input::get('ext');
        $name = $fileName.'.'.$extension;

        $profile->profilePic = 'http://b2.com/Images/'.$name;
        $profile->save();

        $file->move('Images/', $name);

        return $profile->profilePic;

    }

}
