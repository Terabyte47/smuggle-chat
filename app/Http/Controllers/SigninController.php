<?php
namespace smugglechat\Http\Controllers;
use Auth;
use smugglechat\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;
use Session;


class SigninController extends Controller {

	public function login() 
	{
		return view('login');
    }

    public function postSignin(Request $request){

		
    	//Validate posted data
    	$this->Validate($request,[
    			'email'=>'required',
    			'password'=>'required'
    		]);

    	if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
    		return redirect()->back()->with('danger', 'Incorrect username or password');
    	}
			
    	return redirect()->route('home')->with('success', 'Loggin Successfully!');
    	
    }

    //Logout
    public function logout(){
    	
    	Auth::logout();
    	return redirect()->route('signin')->with('info', 'Logged out successfully');
    }
}