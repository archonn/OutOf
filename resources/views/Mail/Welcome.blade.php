<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome to the site {{$user['name']}}</h2>
<br/>
Your verification link is <a href="http://localhost:8000/mentee/verify/{{$user['_token']}}">here</a>
</body>
 
</html>