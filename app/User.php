<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function post(){
		return $this->hasone('App\Post');
	}
	
	public function posts(){
		return $this->hasMany('App\Post');
	}
	
	public function roles(){
		return $this->belongsToMany('App\Role')->withPivot('created_at');
	}
	
	public function photos(){
		return $this->morphMany('App\photo', 'imageable');
	}
	
	public function getNameAttribute($value){
		//Format nama function --> get + NAMAKOLOM + Attribute
		//kita akan mengakses kolom "nama" dari table users
		//sehingga NAMAKOLOM = Nama (semua huruf capital)
		
		return strtoupper($value);
	}
	
	public function setNameAttribute($value){
		//Format nama function --> set + NAMAKOLOM + Attribute
		//kita akan mengakses kolom "nama" dari table users
		//sehingga NAMAKOLOM = Nama (semua huruf capital)
		
		$this->attributes['name'] = strtoupper($value);
	}
}
