<!DOCTYPE html>
<html>
<head>
	<title>Getting Started - OutOf</title>
</head>
<body>
	<h1>Choose what you want to explore.</h1>
	<form action={{URL::to('mentee/getstarted')}} method="POST">
		<table>
			<tr>
				<input type="hidden" name="_token" value={{csrf_token()}}>
				<td><label>Choose Topic:</label></td>
				<td><select name="topic">
					@foreach($topic as $t)
					<option value={{$t['topicID']}}>{{$t['topicNo']}}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td><label>Choose Country:</label></td>
				<td><select name="country">
					@foreach($countries as $c)
					<option value={{$c['countryID']}}>{{$c['countryName']}}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="btnSubmit" value="Confirm"></td>
			</tr>
		</table>
	</form>
</body>
</html>