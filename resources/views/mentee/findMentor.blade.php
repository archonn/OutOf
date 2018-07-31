<!DOCTYPE html>
<html>
<head>
	<title>Mentor find</title>
</head>
<body>
@foreach($mentor as $m)
<div>
	{{$m['name']}}<br>
	{{$m['organization']}}<br>
	{{$m['email']}}<br><br>
</div>
@endforeach
</body>
</html>