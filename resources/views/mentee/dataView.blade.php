<!DOCTYPE html>
<html lang="en">
<head>
  <title>OutOf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href={{url('css/nav.css')}}>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  <script src="js/nav.js"></script>

  <style>
  .jumbotron {
		background-image: url({{url('images/duck.jpg')}});
		background-size: cover;
  }

  .jumbotron, .card {
    -webkit-box-shadow: 0 8px 6px -6px #999;
      -moz-box-shadow: 0 8px 6px -6px #999;
      box-shadow: 0 8px 6px -6px #999;
  }

  .jumbcon {
  	background:rgba(0,0,0,0.3);
  	color:white;
  }

  #sbox {
  		background: rgba(255,255,255,0.7);  		
  }

  #sbox:hover {
  	background: white;
  }

  #sbox, #sbox:hover {
  	transition: 0.2s ease-in-out;
  }

  #search {
  	background:rgba(0,0,0,0);
  }

  #search span, #search:hover span {
  	transition: 0.2s ease-in-out;
  	color: white;
  }

  #search:hover span {
  -webkit-transform: scale(1.3) rotate(90deg);
          transform: scale(1.3) rotate(90deg);
}

 .dropdown-menu {
    transition: 0.2s ease-in-out;
}

.dropdown-menu.collapsing {
    display:block;
}

#cc {
	margin-right: 40px;
}

.card {
	text-decoration: none;
}

.tags {
	margin: 3px 3px 3px 3;
  float: left;
}

.time {
	text-decoration-style: italic;
	float:right;
}

.btn {
  white-space: normal;
}

</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src={{asset('images/logo_y_s.png')}} alt="OutOf Logo" /></a>
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
 				 </div>  
		</div>
	</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="jumbcon container text-center">
  	<hr />
    <h1>Duck Squad</h1>      
    	<div class="btn-group">
    		<span id="cc">All</span>
   			 <button type="button" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="collapse" data-target="#countrydd"></button>   			 
    		<div class="dropdown-menu  dropdown-menu-right collapse" id="countrydd">
          @foreach($countries as $c)
      			<a class="dropdown-item" href="#">{{$c['countryName']}}</a>
          @endforeach
      		</div>
    	</div> 
    <hr />
    	<form action={{url('data/search')}} method="GET">
			<div class="form-group mx-auto">
				<div class="input-group">
   					 <div class="input-group-prepend btn-group-toggle" data-toggle="buttons">
     					<button type="button" class="btn btn-outline-success btn-sm">
     						<input type="checkbox" name="checkimage" autocomplete="off">Image
     					</button>
  						<button type="button" class="btn btn-outline-info btn-sm">
     						<input type="checkbox" name="checkvideo" autocomplete="off">Video
     					</button>
  						<button type="button" class="btn btn-outline-warning btn-sm">
     						<input type="checkbox" name="checkdatasets" autocomplete="off">Datasets
     					</button>
  						<button type="button" class="btn btn-outline-danger btn-sm">
     						<input type="checkbox" name="checkarticle" autocomplete="off">Article
     					</button>  
    				</div>
    					<input type="text" name="search" class="form-control" placeholder="Search">
    				<div class="input-group-append">
     					 <button type="submit" class="btn" id="search"><span class="fa fa-search"></span></button>
    				 </div>
  				</div>
			</div> <hr />			
		</form>
  </div>
</div>
<div class="container">

<!--<ul class="pagination justify-content-center">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>-->
@if(isset($search))
  @foreach($search as $r)
    <a href="" class="card">
            <button class="card-body btn btn-outline-light text-dark">
              <div class="card-text">
                {{$r['title']}}
            </div><br />
            <small class="time">Posted on {{$r['created_at']}}</small>
              <div class="tags">
                <span class="badge badge-success">{{$r['tag']}}</span>  
               </div>
             </button>
          </a>
      <br />
  @endforeach
@else
  @foreach($resources as $r)
  	<a href="" class="card">
     		<button class="card-body btn btn-outline-light text-dark">
     			<div class="card-text">
            {{$r['title']}}
  			</div><br />
  			<small class="time">Posted on {{$r['created_at']}}</small>
      		<div class="tags">
      			<span class="badge badge-success">{{$r['tag']}}</span>  
     			 </div>
     		 </button>
  	  </a>
  <br />
  @endforeach
@endif
    <!--<ul class="pagination justify-content-center">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>-->

</div>
<footer class="page-footer container">
  <hr />
  <div class="footer-copyright text-center mb-3">© 2018 Copyright:
    <a href=""> OutOf</a>. All Rights reserved.
  </div>
</footer>
</body>


</html>
