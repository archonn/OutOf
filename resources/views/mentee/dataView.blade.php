<!DOCTYPE html>
<html>
<head>
	<title>Data View - OutOf</title>
</head>
<body>
	<h1>Resource List</h1>
	@if($resources)
		@foreach($resources as $r)
		<div>
			{{$r['resourceID']}}. {{$r['title']}}
		</div>
		@endforeach
	@endif
</body>
</html>