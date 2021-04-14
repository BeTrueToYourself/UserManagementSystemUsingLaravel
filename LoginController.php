<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function index()
{
	return view('create_acc');
}
    public function create(Request $r)
{
	$name=$r->uname;
	$email=$r->uemail;
	$pass=$r->u_pass;
	$check_email=App\Models\Login::where('email',$email)->get();

	if(count($check_email)>0) ////this is to check duplicate email insertion
	{
		return redirect('/create_account')->with('msg','Email Exists');

	}else{
	$login= new App\Models\Login;

		$login->name= $name;
		$login->email= $email;   	
		$login->pass= $pass;  

		$created=$login->save();

		if($created){

			return redirect('/login')->with('msg','Account Created Successfully. Please LogIn !');

		}

	}
}


public function login()
{
	return view('login');
}


public function check_user(Request $r)
		{
			$email=$r->uemail;
			$password=$r->u_pass;


			$session=  App\Models\Login::where('email',$email)->where('pass',$password)->get();

			//if email and password match with the database then 

			if(count($session)>0){

				//now we have to store the data to the session

				$r->session()->put('user_id',$session[0]->id);
				$r->session()->put('user_name',$session[0]->name);

				return redirect('/welcome');

			}else{

					return redirect('/login')->with('msg','Email or Password does not match');
			}

		}


//$r->session()->put('user_id',$session[0]->id).


public function protect(Request $r)
  {
 if($r->session()->get('user_id')=="")
  {

   return redirect('/login');
   }else{

 $username=$r->session()->get('user_name');

 $capsule = array('username' => $username);

 return view('protect')->with($capsule);
     }
}


public function logout(Request $r)
		{
			$r->session()->forget('user_id');
			$r->session()->forget('user_name');

			return redirect('/login');

		}
    //
}
