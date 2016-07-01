<?php
namespace smugglechat\Http\Controllers;

use Auth;
use smugglechat\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class ChatController extends Controller {

	public function chat() 
	{
	if(!Auth::user()){
            return view('login');
        }
       	    $chats = Auth::user()->friends();
            $requests = Auth::user()->chatRequest();
            return view('chat.index')->with('chats', $chats)->with('requests', $requests);	
    }

    public function getAdd($firstname){
        $chat = Users::where('firstname', $firstname)->first();
        
        if(!$chat){
            return redirect()->route('home')->with('info', 'User not found'); 
        }
        
        if(Auth::user()->hasChatRequestPending($chat) || $chat->hasChatRequestPending(Auth::user())){

            return redirect()->route('home',['firstname'=>$chat->firstname])->with('info', 'Chat request already sent');
        }

        if(Auth::user()->isChatWith($chat)){

            return redirecct()->route('home',['firstname'=>$chat->firstname])->with('info','You are already in chat');
        }

        Auth::user()->addChat($chat);
        return redirect()->route('home')->with('info','Chat request sent');
    }


    public function getAccept($firstname){
        $chat = Users::where('firstname', $firstname)->first();
        //dd("$chat");
        if(!$chat){
            return redirect()->route('home')->with('info', 'User not found'); 
        }

        if(!Auth::user()->hasChatRequestReceived($chat)){
            return redirect()->route('home');
        }
        
        Auth::user()->acceptChatRequest($chat);
        return redirect()->route('user-profile.profile', ['firstname' => $firstname])->with('info', 'Chat request accepted');
    }
    
    public function offline_users(){
        $my = User::find('id');

// Retrieves all shares by users that I follow
// eager loading the "owner" of the share
$shares = Users::all()
    ->where('tbl_friends.user_id', '=', $my->id)
    ->get('shares.*'); // Notice the shares.* here

// prints the username of the person who shared something
foreach ($shares as $share) {
    echo $share->user->username;
}

// Retrieves all users I'm following
$my->followees;

// Retrieves all users that follows me
$my->followers;
    }
}
