@extends('../app')

@section('title', 'Mentee Profile')

@section('content')
<div class="container mt-3">

  <div class="media border p-3">
    <img src={{asset('images/img_avatar.jpg')}} alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:250px;">
    <div class="media-body align-middle text-center mt-3">
      <h4>{{$user['name']}}</h4>
      <i class="mt-3">{{$user['email']}}</i>
      <p class="mt-3">{{$user['phone']}}</p> <br />
      <p> 
    </div>
  </div>
  
  <div class="border container mt-3">
    <h4 class="text-center mt-2">Bio</h4>
    <hr />
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam convallis laoreet augue ut volutpat. Aliquam erat volutpat. Fusce sit amet ante id arcu fringilla tristique imperdiet in orci. Sed elementum arcu vitae convallis bibendum. Integer eleifend nulla in ligula congue, sed pellentesque ex consectetur. Etiam cursus libero eget metus iaculis pharetra. Quisque efficitur lobortis odio sit amet varius. Sed id ipsum feugiat, elementum urna sit amet, tempor ipsum. Nunc fermentum libero sit amet accumsan rhoncus. Sed ut dignissim ante. Aenean et semper purus, eu feugiat nibh. Nulla porta massa et lectus vestibulum, nec varius diam viverra. 
    </p>
    </div>
    
    <div class="container mt-3 row mx-auto">
    <button type="submit" class="btn btn-outline-secondary col-6">Chat</button>
    <button type="submit" class="btn btn-outline-success col-6" data-toggle="modal" data-target="#confirm1">Confirm</button>
    </div>
    
    <div class="modal fade" id="confirm1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
  
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
          Are you sure you want to confirm <b>{{$user['name']}}</b>?
        </div>
        
        <div class="modal-footer">
          <button type="buton" class="btn btn-success btn-block">Confirm!</button>
        </div>
      </div>
    </div>
  </div>
    
</div>
@stop