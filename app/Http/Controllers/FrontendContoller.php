<?php 


namespace App\Http\Controllers;

class FrontendContoller extends controller{
	public function index(){
		
	$info=[
	'love'     =>  '100%',
	'valobasa' =>  'pure',
	];
		//return view('welcome')->with('info',$info);
		 //return view('welcome',compact('info'));
		 //return view('welcome',['info'=>$info]);
		//return redirect()->action('FrontendContoller@contact');
		return redirect()->route('user');
		 
		 
	}
	public function contact(){
		return view('frontend.contact');
	}
}

?>