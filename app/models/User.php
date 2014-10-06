<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
    
    protected $fillable = ['username', 'password', 'first_name', 'last_name'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function userType() {
        // hasOne('Model', 'id column of foreign key', 'local column with foreign key')
        return $this->hasOne('UserType', 'id', 'type');
    }
    
    public static function isValid($input) {
        $validate = Validator::make($input, [
            'username' => 'sometimes|required|alpha_num',
            'first_name' => 'sometimes|required|alpha',
            'last_name' => 'sometimes|required|alpha',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        
        return $validate->passes();
    }
}
