<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<table class='table'>
			<tr>
				<td>title</td>
				<td>text</td>
				<td>short description</td>
			</tr>
			@foreach ($data as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->text }}</td>
					<td>{{ $post->short_description }}</td>

				</tr>
			@endforeach
		</table>
	</div>

</body>
</html>