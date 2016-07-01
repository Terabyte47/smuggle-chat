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

        return $this->firstname .' '. $this->lastname;
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
        if($this->profile_picture){

            return "https://www.gravatar.com/avatar/{{md5($this->email)}}?d=mm&s=80";
        }
        else{
            return "../images/home/mm.png";

        }
    }

    /*
    * Chats funtions to get all chats
    */
    //Chats I have
    public function chatsOfMine(){

        return $this->belongsToMany('smugglechat\Models\Users', 'tbl_friends', 'user_id', 'friend_id');
    }
    //Chats who have me
    public function chatsOf(){

        return $this->belongsToMany('smugglechat\Models\Users', 'tbl_friends', 'friend_id', 'user_id');
    }

    //Merging our relationship
    public function friends(){
        return $this->chatsOfMine()
        ->wherePivot('accepted', true)->get()
        ->merge($this->chatsOf()
        ->wherePivot('accepted', true)->get());
    }

    //Get chat request
    public function chatRequest(){
        
        return $this->chatsOfMine()->wherePivot('accepted', false)->get();
    }

    public function chatRequestPending(){
        
        return $this->chatsOf()->wherePivot('accepted', false)->get();
    }

    public function hasChatRequestPending(Users $user){

        return (bool) $this->chatRequestPending()->where('id', $user->id)->count();
    }

    public function hasChatRequestReceived(Users $user){

         return (bool) $this->chatRequest()->where('id', $user->id)->count(); 
    }

    public function addChat(Users $user){
         $this->chatsOf()->attach($user->id);
    }

    public function acceptChatRequest(Users $user){
         $this->chatRequest->where('id', $user->id)->first()->pivot->update([
                'accepted' =>true,
            ]);
    }

    public function isChatWith(Users $user){
        return (bool) $this->friends()->where('id', $user->id)->count();
    }

}

