<?php
namespace smugglechat\Http\Controllers;
use smugglechat\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;
use Session;

class SignupController extends Controller {

	public function signup() 
	{
		return view('signup');
    }

    public function postSignup(Request $request){


		//Validate posted data
    	$this->validate($request, [
				'firstname'=>'required|min:3|max:30',
				// 'lastname'=> 'required|min:3|max:30',
				// 'mobile'=>'required|min:10|numeric',
				// 'gender'=>'required',
				'email'=>'required|max:255|email|Unique:tbl_users',
				// 'physical_address'=>'required|min:5|max:255',
				'password'=>'required|min:6',
				'confirm_password'=>'required'
			]);
			
			//dd("All clear");

    	//Insert data to database
    	Users::create([
    			'firstname'=>$request->input('firstname'),
    			// 'lastname' =>$request->input('lastname'),
    			// 'gender' =>$request->input('gender'),
    			// 'mobile'=>$request->input('mobile'),
    			'email' =>$request->input('email'),
    			// 'physical_address'=>$request->input('physical_address'),
    			'password'=>bcrypt($request->input('password')) #->bycrypte();

    		]);

    	//Session::put('flash_message', 'User has been registered succefully');
		return redirect()->route('signin')->with('success','User has been created successfully!');
    }

}