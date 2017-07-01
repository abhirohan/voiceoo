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
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        $userEducations = Education::where('user_id',$id)->get();
        $userInterests  = Interest::where('user_id',$id)->get();
        $userJobs       = Job::where('user_id',$id)->get();
        $userSocials    = Social_user::where('user_id',$id)->get();
        return view('profile',compact('userData','userDetails','userEducations','userInterests','userJobs','userSocials'));  

    }

    public function newsfeed(){
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        return view('newsfeed',compact('userDetails'));   
    }

    public function aboutIndex(Request $request, $id){
        $userData       = User::find($id);
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        $userEducations = Education::where('user_id',$id)->get();
        $userInterests  = Interest::where('user_id',$id)->get();
        $userJobs       = Job::where('user_id',$id)->get();
        $userSocials    = Social_user::where('user_id',$id)->get();
        return view('about',compact('userData','userDetails','userEducations','userInterests','userJobs','userSocials'));
    }

    public function uploadAvatar(Request $request){
        // /dd($request);
            if($request->hasFile('user_avatar')){
            $avatar = $request->file('user_avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarWidth  = request('avatar_width');
            $avatarHeight = request('avatar_height');
            $avatarX      = request('avatar_x');
            $avatarY      = request('avatar_y');
            Image::make($avatar)->crop($avatarWidth, $avatarHeight, $avatarX, $avatarY)->save(public_path('/uploads/avatars/' . $avatarName));

            $user = Auth::user();
            $user->avatar = $avatarName;
            $user->save();
        }
        

        return redirect()->route('profile');

    }

    public function uploadCover(Request $request){
        //dd($request);             
        if(request('cover64')){

            $cover = request('cover64');
            list($type, $cover) = explode(';', $cover);
            list(, $cover)      = explode(',', $cover);
            $cover = base64_decode($cover);
            $coverName = Auth::user()->first_name.".".time()."-".Auth::user()->id;
            file_put_contents($coverName.'.jpg', $cover);

            $finalcover = $coverName.'.jpg';
            $coverWidth  = request('cover_width');
            $coverHeight = request('cover_height');
            $coverX      = request('cover_x');
            $coverY      = request('cover_y');
            $img = Image::make($finalcover)->crop($coverWidth, $coverHeight, $coverX, $coverY)->save(public_path('/uploads/covers/' . $finalcover));
            if(!$img){
                echo "abhi";
                dd('error');
            }else{
                $user = Auth::user();
                $user->cover = $finalcover;
                $user->save();                
            }
        }
        

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
