<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'dob'        => 'required',
            'gender'     => 'required',
            'checktc'    => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $checktc = implode(',', $data['checktc']);
        $ip_address          = $_SERVER['REMOTE_ADDR'];
        $user = User::create([
                                            'email' => $data['email'],
                                            'password' => bcrypt($data['password']),
                                            'first_name' =>  $data['first_name'],
                                            'last_name' =>  $data['last_name'],
                                            'dob' =>  $data['dob'],
                                            'gender' =>  $data['gender'],
                                            'checktc' => $checktc,
                                            'total_notes' => '0',
                                            'followers'   => '0',
                                            'following'=> '0',
                                            'total_notes_likes'=> '0',
                                            'total_notes_comment'=> '0',
                                            'total_notes_views'=> '0',
                                            'ip_address' => $ip_address
        ]);
        auth()->login($user);
        $currentUsedId = Auth::User()->id; 
         return redirect()->route('home',['id',$currentUsedId]);
    }
}
