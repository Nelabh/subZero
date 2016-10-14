<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
	protected $fillable = [
	'user_id', 'gender','contact','eval','marks' 
	]; 
	protected $table = 'user_details';
	public $timestamps = false;

}
