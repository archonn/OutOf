@extends('../app')

@section('title', 'Mentor Profile')

@section('content')

<div class="container mt-3">
@if($mentor)
  <div class="media border p-3 mb-3">
    <img src={{asset('images/img_avatar.jpg')}} alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:250px;">
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
          <form action={{url('mentee/sendrequest')}} method="post">
            {{csrf_field()}}
            <input type="hidden" name="mentor_id" value={{$mentor['id']}}>
            <input type="hidden" name="users_id" value={{Auth::user()->id}}>
          <button type="submit" class="btn btn-success btn-block">Confirm!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    @endif
</div>

@stop