<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class Authorize extends Controller
{

    /**
    * If user exists return user details
    * else return False
    */
    public function Authorize(Request $request){
	if($user = User::where('phone', $request->input('phone')){
		return $user;
	}else{
		/**

		*/
		return False;
	}
    }

    /**
     * If User exists return false
     * else create account
    */
    public function CreateUser(Request $request){
	if(is_null(User::where('phone', $request->input('phone')))){
		return False;
	}else{
		$user = new User;
		$user->phone = $request->input('phone');
		$user->name = $request->input('name');
		$user->save;
	}
   }
}
