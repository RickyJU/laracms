<?php

use App\Post;
use App\User;
use App\country;
use App\photo; 
use App\Tag;
use App\Video;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/read', function(){
//	$posts = Post::all();
//	foreach($posts as $post){
//		return $post->title;
//	}
//});

//Route::get('/find', function(){
//	$post = Post::find(1);
//	return $post->title;
//});

//Route::get('/findwhere', function(){
//	$posts = Post::where('is_admin', 0)->orderBy('id', 'desc')->take(1)->get();
//	return $posts;
//});

//Route::get('/basicinsert', function(){
//	$post = new Post;
//	$post->title = 'new Eloquent Title';
//	$post->content = 'Wow Eloquent is really cool';
//	$post->save();
//});

//Route::get('/create', function(){
//	Post::create(['title' => 'create method', 'content' => 'saya belajar banyak hari ini']);
//});

//Route::get('/basicupdate', function(){
//	$post = Post::find(1);
//	$post->title = 'Updated Eloquent Title';
//	$post->content = 'Updated Eloquent Content';
	
//	$post->save();
	
//});

//Route::get('/update', function(){
//	Post::where('id', 1)->where('is_admin', 0)->update(['title' => 'NEW PHP TITLE', 'content' => 'I love learning laravel']);
//});

//Route::get('/delete', function(){
//	$post = Post::find(1);
//	$post->delete();
//});

//Route::get('/delete2', function(){
//	Post::destroy([1,6]);
//});

//Route::get('/delete3', function(){
//	Post::where('is_admin', 0)->delete();
//});

//Route::get('/softdelete', function(){
//	Post::find(7)->delete();
//});

//Route::get('/readsoftdelete', function(){
	//$post = Post::find(7);
	//return $post;
	
	//$post = Post::withTrashed()->where('id', 7)->get();
	//return $post;
	
	//$post = Post::withTrashed()->get();
	//return $post;
	
//	$post = Post::onlyTrashed()->get();
//	return $post;
//});

//Route::get('/restore', function(){
//	Post::withTrashed()->where('id', 7)->restore();
//});

//Route::get('/forcedelete', function(){
//	Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
//});

//one to one Relationship
//Route::get('/user/{id}/post', function($id){
//	return User::find($id)->post->title;
//});

//Route::get('/post/{id}/user', function($id){
//	return Post::find($id)->user->name;
//});

//one to many relationship
//Route::get('/posts', function(){
//	$user = User::find(1);
	
//	foreach($user->posts as $post){
//		echo $post->title;
//	}
//});

//Route::get('/user/{id}/posts', function($id){
//	$user = User::find($id);
	
//	foreach($user->posts as $post){
//		echo $post->title;
//	}
//});

//many to many relationship
//Route::get('/user/{id}/role', function($id){
//	$user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//	return $user;
	//foreach($user->roles as $role){
	//	echo $role->name;
	//}
//});
// Accessing thr intermediate Table /Pivot
//Route::get('user/pivot', function(){
//	$user = User::find(1);
	
//	foreach($user->roles as $role){
//		echo $role->pivot->created_at;
//	}
//});

//Route::get('user/{id}/pivot', function($id){
//	$user = User::find($id);
	
//	foreach($user->roles as $role){
//		echo $role->pivot->created_at;
//	}
//});

//Has many Through relation
//Route::get('/user/country', function(){
//	$country = country::find(1);
	
//	foreach($country->posts as $post){
//		echo $post->title;
//	}
//});

//Route::get('/user/country/{id}', function($id){
//	$country = country::find($id);
	
//	foreach($country->posts as $post){
//		echo $post->title;
//	}
//});

//Polymorphic relationts
//Route::get('/post/photos', function(){
//	$post = Post::find(1);
	
//	foreach($post->photos as $photo){
//		echo $photo->path;
//	}
//});

//Route::get('/user/photos', function(){
//	$user = User::find(1);
	
//	foreach($user->photos as $photo){
//		echo $photo->path;
//	}
//});

//Route::get('/post/{id}/photos', function($id){
//	$post = Post::find($id);
	
//	foreach($post->photos as $photo){
//		echo $photo->path;
//	}
//});

//Route::get('/user/{id}/photos', function($id){
//	$user = User::find($id);
	
//	foreach($user->photos as $photo){
//		echo $photo->path;
//	}
//});

//Polymorphic Relation the inverse
//Route::get('photo/{id}/post', function($id){
//	$photo = Photo::findOrFail($id);
//	return $photo->imageable;
//});

//polymorphic Many to Many
//Route::get('/post/tag', function(){
//	$post = Post::find(1);
	
//	foreach($post->tags as $tag){
//		echo $tag->name;
//	}
//});

//latihan polymorphic many to many
//Route::get('/post/tag/{id}', function($id){
//	$post = Post::find($id);
	
//	foreach($post->tags as $tag){
//		echo $tag->name;
//	}
//});

//Route::get('/video/tag/{id}', function($id){
//	$video = video::find($id);
	
//	foreach($video->tags as $tag){
//		echo $tag->name;
//	}
//});

// Polymorphic Many to Many - retrieving owner
//Route::get('/tag/post', function(){
//	$tag = Tag::find(1);
//	foreach($tag->posts as $post){
//		echo $post->title;
//	}
//});

//Route::get('/', function () {
//   return view('welcome');
//});

//Route::get('/insert', function(){
//	DB::insert("INSERT INTO posts(title, content) values(?, ?)",
//	['PHP with Laravel', 'Laravel is the best Thing that happen to PHP']);
//});

//Route::get('/read', function(){
//	$results = DB::select("SELECT * FROM posts WHERE id = ?", [1]);
	//foreach($results as $post){
	//	return $post->title;
	//}
//	return $results;
//});

//Route::get('/update', function(){
//	$updated = DB::update("UPDATE posts SET title = 'update title' WHERE id = ?", [1]);
//	return $updated;
//});

//Route::get('/delete', function(){
//	$deleted = DB::delete("DELETE FROM posts WHERE id = ?", [1]);
//	return $deleted;
//});

//Route::get('/post/{id}', 'PostController@index');

//Route::resource('posts', 'PostController');

//Route::get('/contact', 'PostController@contact');

//Route::get('post/{id}/{name}/{password}', 'PostController@show_post');

/*
|--------------------------------------------------------------------------
| CRUD Applications
|--------------------------------------------------------------------------
*/

Route::resource('/posts', 'PostController');

Route::get('/dates', function(){
	$date = new DateTime('+1 week');
	echo $date->format('m-d-Y');
	
	echo "<br/>";
	echo Carbon::now();
	
	echo "<br/>";
	echo Carbon::now()->diffForHumans();
	
	echo "<br/>";
	echo Carbon::now()->addDays(10)->diffForHumans();
	
	echo "<br/>";
	echo Carbon::now()->subMonths(5)->diffForHumans();
	
	echo "<br/>";
	echo Carbon::now()->yesterday()->diffForHumans();
});

Route::get('/getname', function(){
	$user = User::find(1);
	
	return $user->name;
});
