@extends('layouts.app')


@section('content')

	<ul>
		@foreach($posts as $post)
			<li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</li>
		@endforeach
	</ul>

@endsection