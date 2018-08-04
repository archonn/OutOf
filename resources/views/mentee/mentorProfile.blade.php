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

    


<div class="container mt-3">
@if($mentor)
  <div class="media border p-3 mb-3">
    <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:250px;">
    <div class="media-body align-middle text-center mt-3">
    	
      <h4>{{$mentor['name']}}</h4>
      <i class="mt-3">{{$mentor['email']}}</i>
      <p class="mt-3">{{$mentor['organization']}}</p> <br />
      <p> 
    </div>
  </div>
  
  <div class="border container mt-3">
    <h4 class="text-center mt-2">Bio</h4>
    <hr />
    <p>
    {{$mentor['why']}} 
    </p>
    </div>
    
    <div class="container mt-3">
    <button type="submit" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#confirm1">Confirm</button>
    </div>
    
    <div class="modal fade" id="confirm1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
  
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
          Are you sure you want to confirm <b>{{$mentor['name']}}</b>?
        </div>
        
        <div class="modal-footer">
          <button type="buton" class="btn btn-success btn-block">Confirm!</button>
        </div>
      </div>
    </div>
  </div>
    @endif
</div>

<footer class="page-footer fixed-bottom container">
  <hr />
  <div class="footer-copyright text-center mb-3">© 2018 Copyright:
    <a href=""> OutOf</a>. All Rights reserved.
  </div>
</footer>
</body>

</html>
