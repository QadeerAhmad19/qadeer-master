<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotCatUser extends Model {

	//
    protected $table="pivot_user_cat";

    protected $fillable = ['users_id', 'cat_id'];

}
