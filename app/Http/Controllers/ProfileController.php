<?php
namespace smugglechat\Http\Controllers;

use smugglechat\Models\Users;
use Illuminate\Http\Request;


class ProfileController extends Controller {

	public function profile($firstname) 
	{
		$user = Users::where('firstname', $firstname)->first();

		if(!$user){
			abourt(404);
		}
		return view('dashboard')->with('user', $user);
    }

    

}