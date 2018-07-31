<!DOCTYPE html>
<html>
<head>
	<title>mentor profile</title>
</head>
<body>
	@if($mentor)
	<div>
		{{$mentor['name']}}<br>
		{{$mentor['organization']}}<br>
		{{$mentor['email']}}<br><br>
	</div>
	@endif
</body>
</html>