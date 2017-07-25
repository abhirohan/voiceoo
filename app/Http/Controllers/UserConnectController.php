<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use App\User;
Use App\UserConnect;
use Session;

class UserConnectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function follow(Request $request, $follower, $following){

    	if($follower && $following){
    		if($follower != $following){
    			$followstore = new UserConnect();
    			$followstore->follower_id        = $follower;
    			$followstore->following_id       = $following;
    			$followstore->connection_status  = 1;
    			$followstoreSave = $followstore->save();
    			if($followstoreSave){
    				return redirect('profile/'.$following);
    			}
    		}
    	}


    }

    public function unfollow(){
    	
    }
}
