<?php
namespace smugglechat\Http\Controllers;
use smugglechat\Models\Users;
use Illuminate\Http\Request;

class HomeController extends Controller {

	public function index() 
	{
		$users = Users::All();
		return view('home')->with('users',$users);
    }

}