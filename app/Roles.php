<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model {

	//
    protected $table = 'roles';
    protected $fillable = ['name'];
    //
    public  function user(){
        return $this->belongsTo('App\User','role_id');
    }

}
