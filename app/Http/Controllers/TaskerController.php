<?php namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
       $available_users=User::where('skill','like','%'.$request->input('skill').'%')
                ->orwhere('address','like','%'.$request->input('location').'%')
            ->get();
        $prototype=true;
        return view('workfinderviews.customer-index',compact('prototype','available_users'));
	}

	public function sendtaskrequest(Request $request){
	    $profile_user=User::find($request->input('user_id'));
        $role=$this->role;
	    return view('workfinderviews.order-page',compact('profile_user','role'));
    }

    public function submittaskorder(Request $request){
        if(!Auth::guest()) {
            $task = new Task();
            $task->users_id = Auth::User()->id;
            $task->customer_id = $request->input('customer_id');
            $task->task_address = $request->input('task_address');
            $task->description = $request->input('task_description');
            if ($request->hasFile('task_image')) {
                $image = $request->file('task_image');
                $store_image = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/img');
                $image->move($destinationPath, $store_image);
                $task->image = $store_image;
            }
            $task->save();
            return redirect('/home');
        }else{
            return redirect('/auth/login');
        }
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function findworkers($cat_id)
    {
        $available_users = Categories::with('user')->find($cat_id);
        $prototype=true;
        $cat=true;
        return view('workfinderviews.customer-index',compact('prototype','available_users','cat'));
    }
    public function canceltask($id)
    {
        $cancel_task = Task::find($id)->update(['status'=>0]);
        if($cancel_task) {
            return redirect('/home');
        }
    }


	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
