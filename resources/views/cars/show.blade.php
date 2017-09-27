@extends('layout.master')

<!DOCTYPE html>
<html>
<head>
	<link href="public/blog.css" rel="stylesheet">
	<title>{{ $car->title }}</title>
</head>

<body>
@section('content')
	<h1 class="blog-title">Title: {{ $car->title }}</h1>
	<p class="lead blog-description">Producer: {{ $car->producer }}</p>
	<p>Number of doors: {{ $car->number_of_doors }}</p>
@endsection
</body>
</html>