<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
	'question', 'max_marks'
	];  
	protected $table = 'questions';
	public $timestamps = false;
	
}
