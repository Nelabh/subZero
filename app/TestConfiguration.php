<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestConfiguration extends Model
{
	protected $fillable = [
	'active', 'total_questions','total_timer','question_timer'
	];  
	protected $table = 'test_configuration';
	public $timestamps = false;
	
}
