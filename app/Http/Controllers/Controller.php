<?php namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    protected  $catagories=null;

    protected $role=null;

    function __construct()
    {
            if(!Auth::guest())
            $this->role=Auth::User()->user_role;
            $this->catagories=Categories::with('user')->get();
    }


}
