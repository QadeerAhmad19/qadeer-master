<?php namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Events;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller {

    protected $workers=null;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function workers(){
        $this->workers=User::with('categories')->where('role_id',2)->get();
        $workers=$this->workers;;
        return view('workfinderviews.partials.super-admin.workers',compact('workers'));
    }

    public function categories(){
        $categories=Categories::all();
        return view('workfinderviews.partials.super-admin.categories',compact('categories'));
    }

    public function EditCat($id){
        $category=Categories::find($id);
        return view('workfinderviews.partials.super-admin.categories',compact('category'));
    }

    public function saveeditcat(Request $request){
        $updated=Categories::find($request->input('id'))->update([
            'name' => $request->input('cat_name'),
            'short_dec' => $request->input('cat_dec'),
            'per_hour' => $request->input('rate'),
        ]);
        if($updated){
            return redirect('/admin/categories');
        }
    }
    public function workerprofilestatus(Request $request){
        $status_change=User::find($request->input('id'))->update(['status'=>$request->input('status')]);
        if($status_change){
            return redirect('admin/workerprofile');
        }
    }
    public function broadcast(){
        event(new Events\BroadCastChat('Hi there Pusher!'));
        return 'Event send';
    }
    public function getallbroadcast(){
        return view('workfinderviews.partials.super-admin.allbroadcast');
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
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
