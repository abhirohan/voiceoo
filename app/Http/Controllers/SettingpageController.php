<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Social_user;
Use App\User;
class SettingpageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function personal(){
        $currentLoggedInUser = Auth::User()->id;
        ($currentLoggedInUser);
        $userDetails = User::find($currentLoggedInUser);
        return view('settingpages.personal',compact('userDetails'));
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
       $this->validate(request(),[
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|max:255|email'
        ]);

       //dd($request);
        $ip_address       = $_SERVER['REMOTE_ADDR'];
        $currentLoggedInUser = Auth::User()->id;
        $personalinfo     = User::find($currentLoggedInUser);

        $personalinfo->first_name       = request('first_name');
        $personalinfo->alternate_email  =  request('email');
        $personalinfo->dob              =  request('dob');
        $personalinfo->last_name        =  request('last_name');
        $personalinfo->website          =  request('website');
        $personalinfo->phone            =  request('phone_number');
        $personalinfo->country          =  request('country');
        $personalinfo->state            =  request('state');
        $personalinfo->city             =  request('city');
        $personalinfo->about            =  request('about_me');
        $personalinfo->gender           =  request('gender');
        $personalinfo->religious_belifs =  request('religious_b');
        $personalinfo->birthplace       =  request('birthplace');
        $personalinfo->occupation       =  request('occupation');
        $personalinfo->marital_status   =  request('marital_status');
        $personalinfo->political_incline=  request('political_view');
        $personalinfo->ip_address       =  $ip_address;

        $settingSave = $personalinfo->save();
        if($settingSave){
            \Session::flash('settingSavemsg','Information has updated successfully');
            return redirect()->route('personalSetting');
        }
    }
}
