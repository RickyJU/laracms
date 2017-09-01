<!--(!DOCTYPE html>
<html>
	<head>
		<title>Laravel</title>
	</head>
	<body>
		<div class="container">
			<h1>Post {{$id}} {{$name}} {{$password}}</h1>
@extends('layouts.app')

@section('content')
	<h1>Contact page</h1>

@stop
		</div>
	</body>
</html>
-->

@extends('layouts.app')


@section('content')
	<h1>Post {{$id}} {{$name}} {{$password}}</h1>

@stop