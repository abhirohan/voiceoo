<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;
Use App\User;
class SettingpageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function personal(){
        return view('settingpages.personal');
    }
    
    public function account(){
        return view('settingpages.account');
    }

    public function changePassword(){
        return view('settingpages.change-password');
    }

    public function hobbies(){
        return view('settingpages.hobbies');
    }

    public function education(){
        return view('settingpages.education');
    }

    public function notification(){
        return view('settingpages.notification');
    }

    public function followrequest(){
        return view('settingpages.followrequest');
    }
    //Save Setting
    public function storePersonal(Request $request){
       //dd($request);
       $this->validate(request(),[
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|max:255|email|unique:users'
        ]);
       $settingSave = App::
    }
}
