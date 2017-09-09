<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //
	public function imageable(){
		return $this->morphTo();
	}
}
