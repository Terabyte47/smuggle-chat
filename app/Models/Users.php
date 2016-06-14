<?php

namespace smugglechat\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Users extends Model implements AuthenticatableContract

{
    use Authenticatable;

    //This model uses the tbl_users table 
    protected $table = 'tbl_users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'lastname',
        'gender',
        'email',
        'physical_address',
        'mobile',
        'password'
       
    ];

    
 // protected $hidden = [
 //    'password',
 //    '_token'
 //    ];

    public function getFirstname(){

        return $this->firstname ?: $this->lastname;
    }

    public function setChatURL(){
        
        if(Auth::check()){
            $url = 'chat';
        }
        else
        {
            $url = 'signin';
        }
        return $url;
    }

    public function getAvatarURL(){

        return "https://www.gravatar.com/avatar/{{md5($this->email)}}?d=mm&s=80";
    }
}

