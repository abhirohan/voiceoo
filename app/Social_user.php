<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_user extends Model
{
    protected $table = 'users';
    protected $fillable = [

                            'first_name', 
                            'email',
                            'dob',
                            'last_name',
                            'dob',
                            'website',
                            'phone',
                            'country',
                            'state',
                            'city',
                            'about',
                            'gender',
                            'religious_belifs',
                            'birthplace',
                            'occupation',
                            'marital_status',
                            'political_incline',
                            'ip_address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
