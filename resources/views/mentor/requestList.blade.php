@extends('../app')

@section('title', 'Request List')

@section('content')
<div class="container mt-3">
  <h2 class="text-center">Requests</h2>
  <hr />
  @if (\Session::has('status'))
      <br><div class="alert alert-success">
          <p>{{ \Session::get('status') }}</p>
      </div><br />
      @endif

  
  @foreach($user as $u)
  <a href={{url('mentee/'.$u->User->id)}} class="card mb-3">
      <button class="card-body shadow btn btn-outline-light text-dark">
        <div class="card-text media">
            <img src={{asset('images/img_avatar.jpg')}} alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
<h4>{{$u->User->name}}</h4>
      <p>{{$u->User->email}}</p>    
      </div>
      </div><br />      
       </button>
    </a>
    @endforeach
    @empty($user[0])
      <div class="text-center">There are currently no requests!</div>
    @endempty
</div>
@stop