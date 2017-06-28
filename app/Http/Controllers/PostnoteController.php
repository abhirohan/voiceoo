<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
use App\Postnote;
use Image;


class PostnoteController extends Controller
{
    public function noteStore(Request $request){
    	$currentLoggedInUser = Auth::User()->id;
        $userDetails = User::find($currentLoggedInUser);
        $ip_address  = $_SERVER['REMOTE_ADDR'];
        $newNote = new Postnote();
        $newNote->user_id        =  $currentLoggedInUser;
        $newNote->content        =  request('note_content');
        $newNote->location       =  request('current_location');
        $newNote->likes          =  0;
        $newNote->comments       =  0;
        $newNote->bookmarkerd    =  0;
        $newNote->share          =  0;
        $newNote->ip_address    =  $ip_address;

        if($request->hasFile('note_featured')){
    		$note_featured = $request->file('note_featured');
    		$filename = time() . '.' . $note_featured->getClientOriginalExtension();
    		Image::make($note_featured)->save( public_path('/uploads/note_featured/' . $filename ) );
    		$newNote->featured_image  =  $filename;
    	}
    	$newNote->save();
    }
}
