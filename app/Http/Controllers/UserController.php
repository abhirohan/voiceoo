<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
Use App\Education;
Use App\Interest;
Use App\Job;
Use App\Social_user;
use Carbon\Carbon;
use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request, $id)
    {
        $userData       = User::find($id);
        $userEducations = Education::where('user_id',$id)->get();
        $userInterests  = Interest::where('user_id',$id)->get();
        $userJobs       = Job::where('user_id',$id)->get();
        $userSocials    = Social_user::where('user_id',$id)->get();
        return view('profile',compact('userData','userEducations','userInterests','userJobs','userSocials'));   
    }

    public function aboutIndex(Request $request, $id){
        $userData       = User::find($id);
        $userEducations = Education::where('user_id',$id)->get();
        $userInterests  = Interest::where('user_id',$id)->get();
        $userJobs       = Job::where('user_id',$id)->get();
        $userSocials    = Social_user::where('user_id',$id)->get();
        return view('about',compact('userData','userEducations','userInterests','userJobs','userSocials'));
    }

    public function uploadAvatar(Request $request){
            $avatar = request('imagebase64');
            list($type, $avatar) = explode(';', $avatar);
            list(, $avatar)      = explode(',', $avatar);
            $avatar = base64_decode($avatar);
            $avtarName = Auth::user()->first_name.".".time()."-".Auth::user()->id;
            file_put_contents($avtarName.'.png', $avatar);
            $finalAvatar = $avtarName.'.png';
            $avtarInfo = getimagesize($finalAvatar);
            $avtarWidth = $avtarInfo[0];
            $avtarHeight = $avtarInfo[1];
            Image::make($finalAvatar)->resize(400, 400)->save(public_path('/uploads/avatars/' . $finalAvatar));

            $user = Auth::user();
            $user->avatar = $finalAvatar;
            $user->save();
        

        return redirect()->route('profile');

    }

    public function uploadCover(Request $request){
            $cover = request('cover64');
            list($type, $cover) = explode(';', $cover);
            list(, $cover)      = explode(',', $cover);
            $cover = base64_decode($cover);
            $coverName = Auth::user()->first_name.".".time()."-".Auth::user()->id;
            file_put_contents($coverName.'.jpg', $cover);
            $finalcover = $coverName.'.jpg';
            $coverInfo = getimagesize($finalcover);
            $coverWidth = $coverInfo[0];
            $coverHeight = $coverInfo[1];
            Image::make($finalcover)->resize(1100, 400)->save(public_path('/uploads/covers/' . $finalcover));

            $user = Auth::user();
            $user->cover = $finalcover;
            $user->save();
        

        return redirect()->route('profile');

    }

    public function uploadTinyStatus(Request $request){
        $currentLoggedInUser  = Auth::User();
        $currentLoggedInUser->tiny_status = request('tiny_status');
        $currentLoggedInUser->save();
        return redirect()->route('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
