<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use App\User;
Use App\Social_user;
Use App\Interest;
class SettingpageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function personal(){
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        $userSocial  = Social_user::where('user_id',$currentLoggedInUser)->first();
        return view('settingpages.personal',compact('userDetails','userSocial'));
    }
    
    public function account(){
        return view('settingpages.account');
    }

    public function changePassword(){
        return view('settingpages.change-password');
    }

    public function hobbies(){
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        $userInterest  = Interest::where('user_id',$currentLoggedInUser)->first();
        return view('settingpages.hobbies',compact('userDetails','userInterest'));
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
            'last_name'  => 'required|string|max:255'
        ]);

        $ip_address              = $_SERVER['REMOTE_ADDR'];
        $currentLoggedInUser     = Auth::User()->id;
        $currentLoggedInUsername = Auth::User()->first_name;
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
            \Session::flash('settingSavemsg','Hello '.$currentLoggedInUsername.', Your Information has updated successfully.');
            return redirect()->route('personalSetting');
        }
    }

    public function storePassword(Request $request){
       $this->validate(request(),[
            'current_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'new_confirm_password' => 'required|string|min:6|same:new_password',
        ]);
        $currentLoggedInUser     = Auth::User()->id;
        $currentLoggedInUsername = Auth::User()->first_name;
        $ip_address              = $_SERVER['REMOTE_ADDR'];
        $userDetails             = User::find($currentLoggedInUser);

        $exectPassword  = $userDetails->password;
        $newPassword  = bcrypt(request('new_password'));
        $checkPassword= bcrypt(request('current_password'));
        if(Hash::check(request('current_password'),$exectPassword)){
            $userDetails->password   = bcrypt(request('new_password'));
            $userDetails->ip_address = $ip_address;
            $userDetails->save();
            Session::flash('settingSavemsg','Hello '.$currentLoggedInUsername.', Your Password has changed successfully.');
            return redirect()->route('changePasswordSetting');
        }else{
            \Session::flash('changpasswordmsg','Current password in not correct.Please try again.');
            return redirect()->route('changePasswordSetting');
        }
    }

    public function storeSocial(Request $request){
        $ip_address              = $_SERVER['REMOTE_ADDR'];
        $currentLoggedInUser     = Auth::User()->id;
        $currentLoggedInUsername = Auth::User()->first_name;
        $socialUserFind          = Social_user::where('user_id',$currentLoggedInUser)->count(); 

        if($socialUserFind > 0){
            $socialUser           = Social_user::where('user_id',$currentLoggedInUser)->first();
        }else{
            $socialUser           = new Social_user();
        }
        $socialUser->user_id      =  $currentLoggedInUser;
        $socialUser->facebook     =  request('c_facebook');
        $socialUser->twitter      =  request('c_twitter');
        $socialUser->google_plus  =  request('c_google');
        $socialUser->vk           =  request('c_vk');
        $socialUser->pinterest    =  request('c_pin');
        $socialUser->tumblr       =  request('c_tumblr');
        $socialUser->linkedin     =  request('c_linkedin');
        $socialUser->skype        =  request('c_skype');
        $socialUser->instagram    =  request('c_insta');
        $socialUser->github       =  request('c_github');
        $socialUser->soundcloud   =  request('c_soundcloud');
        $socialUser->flickr       =  request('c_flickr');
        $socialUser->youtube      =  request('c_youtube');
        $socialUser->vine         =  request('c_vine');
        $socialUser->rss          =  request('c_rss');
        $socialUser->dribble      =  request('c_dribble');
        $socialUser->Behance      =  request('c_behance');
        $socialUser->spotify      =  request('c_spotify');
        $socialUser->ip_address   =  $ip_address;

        $socialSettingSave = $socialUser->save();
        if($socialSettingSave){
            Session::flash('settingSavemsg','Hello '.$currentLoggedInUsername.', Your Information has updated successfully.');
            return redirect()->route('personalSetting');
        }
    }

    public function storeInterest(Request $request){
        $ip_address              = $_SERVER['REMOTE_ADDR'];
        $currentLoggedInUser     = Auth::User()->id;
        $currentLoggedInUsername = Auth::User()->first_name;
        $interestUserFind        = Interest::where('user_id',$currentLoggedInUser)->count(); 

        if($interestUserFind > 0){
            $interestUser            = Interest::where('user_id',$currentLoggedInUser)->first();
        }else{
            $interestUser            = new Interest();
        }
        $interestUser->user_id       =  $currentLoggedInUser;
        $interestUser->hobbies       =  request('hobbies');
        $interestUser->music_artists =  request('fav_music');
        $interestUser->tv_shows      =  request('fav_tv');
        $interestUser->fav_movies    =  request('fav_movies');
        $interestUser->fav_books     =  request('fav_books');
        $interestUser->fav_writers   =  request('fav_writers');
        $interestUser->fav_games     =  request('fav_games');
        $interestUser->other_interest=  request('other_interest');
        $interestUser->ip_address    =  $ip_address;

        $interestSettingSave = $interestUser->save();
        if($interestSettingSave){
            \Session::flash('settingSavemsg','Hello '.$currentLoggedInUsername.', Your Information has updated successfully.');
            return redirect()->route('hobbiesSetting');
        }
    }
}
