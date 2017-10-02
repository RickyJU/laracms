@extends('layouts.app')



@section('content')

	<h1>{{$post->title}}</h1>
	<h1>{{$post->content}}</h1>
	
	<a href="{{route('posts.edit', $post->id)}}">Edit</a>

@endsection