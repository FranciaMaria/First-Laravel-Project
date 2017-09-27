@extends('layout.master')

<!DOCTYPE html>
<html>
<head>
	<title>Cars</title>
</head>
<body>
@section('title')
	<h1>Cars</h1>
	<ul>
		@foreach($cars as $car)
			<li><a href="/car/{{$car->id}}">{{$car->title}}</a></li>
		@endforeach
	</ul>
@endsection

</body>
</html>