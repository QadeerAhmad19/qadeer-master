<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	//
    protected $fillable = ['description', 'task_image', 'task_address', 'customer_id','users_id','status'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
