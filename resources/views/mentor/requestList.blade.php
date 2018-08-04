@extends('../app')

@section('title', 'Request List')

@section('content')
<div class="container mt-3">
  <h2 class="text-center">Requests</h2>
  <hr />
  
  @foreach($user as $u)
  <a href={{url('mentee/'.$u['id'])}} class="card mb-3">
      <button class="card-body shadow btn btn-outline-light text-dark">
        <div class="card-text media">
            <img src="img_avatar3.png" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
<h4>{{$u['name']}}</h4>
      <p>{{$u['email']}}</p>    
      </div>
      </div><br />      
       </button>
    </a>
    @endforeach
</div>
@stop