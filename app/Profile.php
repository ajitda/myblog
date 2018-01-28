<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable= ['name', 'email', 'date_of_birth', 'image', 'gender', 'address', 'user_id']; 

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
