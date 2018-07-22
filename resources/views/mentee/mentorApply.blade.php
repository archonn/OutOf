<!DOCTYPE html>
<html lang="en">
<head>
  <title>OutOf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/nav.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  <script src="nav.js"></script>

  <style>
.bm {
  -webkit-box-shadow: 0px 3px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow:    0px 3px 0px rgba(0, 0, 0, 0.3);
    box-shadow:         0px 3px 0px rgba(0, 0, 0, 0.3);
}

.bm:active {
  margin-top: 3px;
    margin-bottom: -3px;
}

#bm1 {
  width: 300px;
  margin: 10px 0 10px 0;
}

#mendiv {
  padding: 20px 3px 20px 3px;
}

.ribbon {
  position: relative;
  background: #0070BB;
  color: white;
  display: block;
  width: 50%;
  margin: 0 auto;
  text-align: center;
  z-index: 3;
}
.ribbon:before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 12px 12px 0;
  border-color: transparent #003355 transparent transparent;
  left: -1px;
  bottom: -12px;
  z-index: 1;
}
.ribbon:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 12px 12px 0 0;
  border-color: #003355 transparent transparent transparent;
  right: -1px;
  bottom: -12px;
  z-index: 1;
}
.ribbon .left-fold {
  background-color: #005188;
  background-image: -webkit-linear-gradient(-180deg, #005188, #0061a2);
  background-image: linear-gradient(-90deg,#005188, #0061a2);
  position: absolute;
  height: 50px;
  width: 25px;
  left: -15px;
  bottom: -12px;
  display: block;
  margin: 0;
  border-right: 1px solid #005188;
}
.ribbon .left-fold:before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 15px 25px 0;
  border-color: transparent #0061a2 transparent transparent;
  left: -15px;
  top: 0;
}
.ribbon .left-fold:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 25px 15px;
  border-color: transparent transparent #0061a2 transparent;
  left: -15px;
  bottom: 0;
}
.ribbon h3 {
  z-index: 2;
  position: relative;
  background: #0070BB;
  width: 100%;
  display: block;
  font-size: 26px;
  line-height: 1.3em;
  padding: 15px 0;
  font-weight: 600;
  letter-spacing: 0.5px;
}
.ribbon .right-fold {
  background-color: #005188;
  background-image: -webkit-linear-gradient(-360deg, #005188, #0061a2);
  background-image: linear-gradient(90deg,#005188, #0061a2);
  position: absolute;
  height: 50px;
  width: 25px;
  right: -15px;
  bottom: -12px;
  display: block;
  margin: 0;
  border-left: 1px solid #005188;
}
.ribbon .right-fold:before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 25px 15px 0 0;
  border-color: #0061a2 transparent transparent transparent;
  right: -15px;
  top: 0;
}
.ribbon .right-fold:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 25px 0 0 15px;
  border-color: transparent transparent transparent #0061a2;
  right: -15px;
  bottom: 0;
}




</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="images/logo_y_s.png" alt="OutOf Logo" /></a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
 				</button>
 				 <div class="collapse navbar-collapse" id="collapsibleNavbar">
   					 <ul class="navbar-nav">
     					 <li class="nav-item">
       					 <a class="nav-link" href="#">Link</a>
     					 </li>
     					 <li class="nav-item">
     					   <a class="nav-link" href="#">Link</a>
     					 </li>
     					 <li class="nav-item">
     					   <a class="nav-link" href="#">Link</a>
     					 </li>    
    				</ul>
            <a href="#" class="btn btn-info btn btn-outline-light btn-sm float-right text-dark navb" role="button">Link Button</a>
 				 </div>  
		</div>
	</nav>

  <div class="text-center mt-3 container border rounded shadow" id="mendiv">
    <div class="ribbon">
  <span class="left-fold">
  </span>
  <h3>Mentorship</h3>
  <span class="right-fold">
  </span>
</div>
      <a href="#" class="btn btn-outline-success bm btn-lg" id="bm1" role="button">Find Mentors!</a><br />
      <span>or</span><br />
      <a href="#" class="btn bm btn-outline-secondary" role="button">Assign Automatically</a>
  </div>


<footer class="page-footer container">
  <hr />
  <div class="footer-copyright text-center mb-3">© 2018 Copyright:
    <a href=""> OutOf</a>. All Rights reserved.
  </div>
</footer>
</body>


</html>
