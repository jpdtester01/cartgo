<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

use Validator;

class LoginController extends Controller
{
    public function login(Request $req){
		$SiteData = DB::table('tbl_sitedata')-> get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			
		return view('template.section',['site'=>'login'])->with(compact('SiteData'));
    }
	
	public function check(Request $req){
		$user = DB::table('users')
                    ->where('email', $req->identity)
                    ->orWhere('username', $req->identity)
                    ->where('password', md5($req->pass))
                    ->first();
					
		$data = DB::table('users')
                    ->where('email', $req->identity)
                    ->orWhere('username', $req->identity)
                    ->value('userid');
					
    	if($user != null){
            
            $req->session()->put('id', $data);
    		
			return redirect('/');

    	}else{
            $req->session()->put('msg', 'Invalid Username or Password !');
    		return redirect('/login');
    	}
    }
	
	public function register(Request $req){
    	return view('template.section',['site'=>'register']);
    }
	
	public function unameCheck(Request $req){
		$unameData = DB::table('users')
                    ->where('username', $req->keyword)
					->first();
					
		if($unameData != null){
			echo "<p style='color:red;'> Username Taken !</p>";
		}else{
			echo "<p style='color:lime;'> Username Available !</p>";
		}
    }
	
	public function emailChk(Request $req){
		$mailData = DB::table('users')
                    ->where('email', $req->keyword)
					->first();
					
		if($mailData != null){
			echo "<p style='color:red;'> Email registered already !</p>";
		}else{
			echo "<p style='color:lime;'> Email Address Available !</p>";
		}
    }
	
	public function contactCheck(Request $req){
		$phnData = DB::table('users')
                    ->where('contact', $req->keyword)
					->first();
					
		if($phnData != null){
			echo "<p style='color:red;'> Phone Number registered already !</p>";
		}else{
			echo "<p style='color:lime;'> Phone Number Available !</p>";
		}
    }
	
	public function registerCheck(Request $request){
		
		$Validation = Validator::make($request->all(), [
			'username' => 'required|unique:users',
			'contact'  => 'required|unique:users',
			'email'    => 'required|email|unique:users',
			'pass1'	   => 'required|min:5',
			'pass2'	   => 'required|same:pass1'
		]);

		if($Validation->fails()){
			return back()
				->with('errors', $Validation->errors())
				->withInput();
		}
		
		$company="";
		$Gender="";
		
		if($request->company == null){
			$company = "N/A";
		}else{
			$company = $request->company;
		}

		if($request->Gender == ""){
			$Gender = "Male";
		}else{
			$Gender = $request->Gender;
		}

		$status1= DB::table('users')->insert([
				'userid'	=> null,
				'username'	=> $request->username,
				'email'  	=> $request->email,
				'contact'  	=> $request->contact,
				'address'  	=> $request->address,
				'password'  => md5($request->pass1),
				'type'      => 'user',
				'company'   => 'N/A'
				]);
		
		if(!$status1){
			return redirect("/login");
		}else{
			$request->session()->put('msg', 'Account Has Been Registered, Please Log in.');
			return redirect('/login');
		}
    }
}
