<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password','mobile_number','image','dob','language','address','city','role_id','morning','afternoon','evening','skill','rate','status'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function user_role() {
        return $this->belongsTo('App\Roles', 'role_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Categories','pivot_user_cat','users_id','cat_id');
    }

    public function tasks(){
        return $this->hasMany('App\Task','customer_id');
    }

}
