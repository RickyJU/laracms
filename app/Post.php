<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
	public $directory = '/images/';
	use SoftDeletes;
	
	protected $dates = ['delete_at'];
	
	protected $fillable = [
		'title',
		'content',
		'path'
	];
	
	public function user(){
		return $this->belongsTo('App\User');
	}
	
	public function photos(){
		return $this->morphMany('App\Photo', 'imageable');
	}
	
	public function videos(){
		return $this->morphedByMany('App\Video', 'taggable');
	}
	public function tags(){
		return $this->morphToMany('App\Tag', 'taggable');
	}
	
	public static function scopeLatest($query){
		//Format nama function --> scope + MAUNGAPAIN
		//scope + Latest (mau menampilkan Latest Post)
		
		return $query->orderBy('id', 'desc')->get();
	}
	
	public function getPathAttribute($value){
		return $this->directory . $value;
	}
}

