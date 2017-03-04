<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $role=Auth::User()->user_role;
        if(isset($role))
        {
            $role_id=$role->id;
            $role=$role->name;
            if($role_id==3){
                return view('workfinderviews.customer-index',compact('role'));
            }else if($role_id==2){
                $my_tasks=Auth::User()->tasks;
//                dd($my_tasks);
                return view('workfinderviews.index',compact('role','my_tasks'));
            }else if($role_id==1){
                return view('home',compact('role'));
            }

        }
	}

}
