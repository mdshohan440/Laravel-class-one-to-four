<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
class UserController extends controller{
	
	//public function userform(){
		//return view('user.form');
	//}
	//login form for dashio template
	public function index(){

		return view('user.loginform');
	}
	public function registration(){
		return view('user.registration');
	}
	public function registrationsave(Request $request){
		
		echo $username = $request->input('username');
		echo "</br>";
		echo $password = $request->input('password');

		DB::insert('insert into user (username,password) values(?,?)',[$username,$password]);
		Session::flash('messege','Registration Successfully Done');
		return redirect()->route('registration');

	}
	
	public function checklogin(Request $request){
		
		$username = $request->input('username');
		$password = $request->input('password');

		$users = DB::select('select * from user where username=? and password=?',[$username,$password]);

		if(count($users)>0){
		foreach ($users as $user) {
			//echo $user->username;
			//echo $user->password ;

			 $request->session()->put('username',$user->username);


			if($username == $user->username && $password == $user->password){

			return redirect()->route('dashboard');
			}
			//var_dump($users);

			//exit();

			

		}

		
			}
		

		else{


			Session::flash('messege','  * Please Check Your UserName and Password');
			return redirect()->action('UserController@index');


		}
	}



	public function show(){
		return 'optional';
	}
	public function display($name){
		return $name ;
	}
	
	public function seveConsultation(Request $request){
		/*if( $request->input('age') >=18){
			echo "You will get free consultation";
		}else{
			return redirect()->route('user');
		}*/
		//echo $request->input('email');
		//echo $request->input('select');
		//echo $request->input('subject');
		//echo $request->input('message');
		//echo $request->path();
		//echo $request->url();
		//echo $request->fullUrl();
		//echo $request->method();
		/*if($request->isMethod('post')){
			echo "Action from post Method";
		}else {
			echo "Action from Get Method";
		}
		*/
		
		
		//$all = $request->all();
		//var_dump($all);
		
		
		$name = $request->input('_token');
		echo $name;
		
		//echo  $request->input('name');
		
		
	}
	
	public function updateConsultation(Request $request,$id){
		
	}
}