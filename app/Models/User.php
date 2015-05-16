<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	protected $fillable = ['email','password','name','phone','address'];
	protected $hidden = ['password'];
	
}
