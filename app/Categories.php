<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

	//
     protected $table="categories";
     protected $fillable=['name','per_hour','short_dec'];

    public function user(){
        return $this->belongsToMany('App\User','pivot_user_cat','cat_id','users_id');
    }

}
