<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('access-register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(request(),[

            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6',
            'datetimepicker'=> 'required',
            'gender'        => 'required',
            'checktc'       => 'required'

        ]);

        $checktc = implode(',', request('checktc'));
        $ip_address          = $_SERVER['REMOTE_ADDR'];
        $user = User::create(
                                        [
                                            'first_name' =>  request('first_name'),
                                            'last_name' =>  request('last_name'),
                                            'email' => request('email'),
                                            'password' => bcrypt(request('password')),
                                            'dob' =>  request('datetimepicker'),
                                            'gender' =>  request('gender'),
                                            'checktc' => $checktc,
                                            'total_notes' => '0',
                                            'followers'   => '0',
                                            'following'=> '0',
                                            'total_notes_likes'=> '0',
                                            'total_notes_comment'=> '0',
                                            'total_notes_views'=> '0',
                                            'ip_address' => $ip_address
                                        ]
                                
                            );
        \Session::flash('regmessage','Welcome on board');
        return redirect('login');


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
