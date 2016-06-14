<?php
namespace smugglechat\Http\Controllers;

use Auth;
use smugglechat\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;
use Session;

class ChatController extends Controller {

	public function chat() 
	{
		 if(Auth::check()){
            return view('chat');
        }
        else
        {
           return view('login');
        }		
    }
}