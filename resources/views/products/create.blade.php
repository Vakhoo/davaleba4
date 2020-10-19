<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<form action="{{ route('storeproducts') }}" method="POST">
			@csrf
			<label>title:</label>		
			<input type="text" class="form-control" name="title">
			<label>text:</label>
			<textarea class="form-control" name="text"></textarea>
			<label>short description</label>
			<textarea class="form-control" name="short-description"></textarea>
			<button class="btn btn-primary w-100">save</button>
		</form>
	</div>

</body>
</html>