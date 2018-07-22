<!DOCTYPE html>
<html lang="en">
<head>
  <title>OutOf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href={{asset('css/nav.css')}}>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  <script src="js/nav.js"></script>

  <style>
 
.flip-container {
  perspective: 1000px;
  padding: 20px 3px 20px 3px;
}
  .flip-container.hover .flipper {
    transform: rotateY(180deg);
  }

.flip-container, .front, .back {
  height: 550px;
  width: 700px;
}

.flipper {
  transition: 0.6s;
  transform-style: preserve-3d;

  position: relative;
}

.front, .back {
  backface-visibility: hidden;

  position: absolute;
  top: 0;
  left: 0;
}

.front {
  z-index: 2;
  transform: rotateY(0deg);
}

.back {
  transform: rotateY(180deg);
}

.pd {
  margin-bottom:20px;
}

.logo {
  margin: 0 auto;
  width: 100%;
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
            <a href="#" class="btn btn-info btn-outline-light btn-sm float-right text-dark navb" role="button">Link Button</a>
         </div>  
    </div>
  </nav>

    


<div class="container flip flip-container" id="flip-toggle">
  <div class="flipper">
    <div class="front">
    	<div class="text-center">  
      <button class="btn btn-outline-danger shadow btn-lg mt-3" onclick="document.querySelector('#flip-toggle').classList.toggle('hover');">
          Don't have an account?
       </button>
    </div><br>
    @if (\Session::has('errors'))
      <div class="alert alert-danger">
          <p>{{ \Session::get('errors') }}</p>
      </div><br />
      @endif
      @if (\Session::has('status'))
      <div class="alert alert-success">
          <p>{{ \Session::get('status') }}</p>
      </div><br />
      @endif
    	<div class="logo">
        <img src={{asset('images/outof2.png')}} alt="OutOfLogo" class="mx-auto d-block pd"/>
      </div>
      <form action={{URL::to('mentee/login')}} name="login" method="POST">
        {{csrf_field()}}
      <input type="text" class="form-control pd" name="email" placeholder="Email">
      <input type="password" class="form-control pd" name="password" placeholder="Password">
    <button type="submit" class="btn btn-success shadow btn-block">Login</button>
  </form>

    </div>
    <div class="back flip">
    	<div class="text-center">  
      <button class="btn btn-outline-success shadow btn-lg mt-3" onclick="document.querySelector('#flip-toggle').classList.toggle('hover');">
          Already have an account?
       </button>
    </div>
      <div class="logo">
        <img src={{asset('images/outof1.png')}} alt="OutOfLogo" class="mx-auto d-block pd"/>
      </div>
      <form action={{url('mentee')}} name="register" method="POST">
        <div class="input-group pd">
           <div class="input-group-prepend">
                  <select class="form-control" name="country">
                       <option class="text-secondary" value="">Country</option>
                       @foreach($country as $c)
                       <option value={{$c['countryID']}}>{{$c['countryName']}}</option>
                       @endforeach
                 </select>
           </div>
           <input type="text" class="form-control" name="name" placeholder="Full Name">
         </div>

         <input type="hidden" name="_token" value={{csrf_token()}}>
          <input type="hidden" name="status" value="0">

      <input type="text" class="form-control pd" name="email" placeholder="Email">
      <input type="password" class="form-control pd" name="password" placeholder="Password">
      <input type="password" class="form-control pd" name="confirmPassword" placeholder="Confirm Password">
    <button type="submit" class="btn btn-warning shadow btn-block">Register</button>
  </form>

    </div>
  </div>
</div>

<footer class="page-footer container">
  <hr />
  <div class="footer-copyright text-center mb-3">© 2018 Copyright:
    <a href=""> OutOf</a>. All Rights reserved.
  </div>
</footer>
</body>


</html>
