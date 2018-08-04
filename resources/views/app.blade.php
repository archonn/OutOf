<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mentor Profile - OutOf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href={{asset('css/nav.css')}}>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  <script src="nav.js"></script>
  @yield('style')
 
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
  @yield('content')

  <footer class="page-footer fixed-bottom container">
  <hr />
  <div class="footer-copyright text-center mb-3">© 2018 Copyright:
    <a href=""> OutOf</a>. All Rights reserved.
  </div>
</footer>
</body>

</html>
