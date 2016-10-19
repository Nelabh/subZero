<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
	protected $fillable = [
	'question_id', 'obtained_marks','user_id','eval','answer'
	];  
	protected $table = 'user_answers';
	public $timestamps = false;
	
}
