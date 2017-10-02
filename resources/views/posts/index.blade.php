@extends('layouts.app')


@section('content')
	<h1>Title</h1>
	<ul>
		@foreach($posts as $post)
			<li><a href="{{route('posts.show', $post->id)}}">{{$post->title}} </a> </li>
		@endforeach
	</ul>
	
	<h1>Content</h1>
	<ul>
		@foreach($posts as $post)
			<li><a href="{{route('posts.show', $post->id)}}">{{$post->content}} </a> </li>
		@endforeach
	</ul>

@endsection