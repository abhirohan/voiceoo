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
<<<<<<< HEAD
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
=======
        $userDetails       = Auth::User();
>>>>>>> a314fd82151630e1a5ee6466052588a349643dd2
        $userEducations = Education::where('user_id',$id)->get();
        $userInterests  = Interest::where('user_id',$id)->get();
        $userJobs       = Job::where('user_id',$id)->get();
        $userSocials    = Social_user::where('user_id',$id)->get();
<<<<<<< HEAD
        return view('profile',compact('userData','userDetails','userEducations','userInterests','userJobs','userSocials'));  

    }

    public function newsfeed(){
        $currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        return view('newsfeed',compact('userDetails'));   
=======
        return view('profile',compact('userData','userDetails','userEducations','userInterests','userJobs','userSocials'));   
>>>>>>> a314fd82151630e1a5ee6466052588a349643dd2
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
        //dd($request);
        if($request->hasFile('user_header')){
            $cover = $request->file('user_header');
            $coverName = time() . '.' . $cover->getClientOriginalExtension();
            $coverWidth  = request('cover_width');
            $coverHeight = request('cover_height');
            $coverX      = request('cover_x');
            $coverY      = request('cover_y');
            Image::make($cover)->crop($coverWidth, $coverHeight, $coverX, $coverY)->save(public_path('/uploads/covers/' . $coverName));

            $user = Auth::user();
            $user->cover = $coverName;
            $user->save();
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
