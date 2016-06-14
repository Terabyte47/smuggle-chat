<?php
namespace smugglechat\Http\Controllers;

use DB;
use smugglechat\Models\Users;
use Illuminate\Http\Request;


class SearchController extends Controller {

	public function search(Request $request) 
	{
		$query = $request->input('query'); 
		if(!$query){
		return redirect()->route('home');
		}

		$users = Users::where(DB::raw("CONCAT(firstname, ' ',lastname )"), 'LIKE', "%{$query}%")
		->orWhere('physical_address', 'LIKE', "%{$query}%")
		->get();

		return view('search.search-results')->with('users', $users);
    }
}