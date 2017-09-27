<!DOCTYPE html>
<html>
<head>
	<title>Cars</title>
</head>
<body>
	<h1>Cars</h1>
	<ul>
		@foreach($cars as $car)
			<li><a href="/car/{{$car->id}}">{{$car->title}}</a></li>
		@endforeach
	</ul>

</body>
</html>