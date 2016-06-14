<?php
use Illuminate\Http\Request;
namespace smugglechat\Http\Controllers;

class HomeController extends Controller {

	public function index() 
	{
		return view('home');
    }

}