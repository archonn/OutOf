@extends('../app')

@section('title', 'Available Mentors')
 
@section('content')  
<div class="container mt-3">
  <h2 class="text-center">Available Mentors</h2>
  <hr />
  
  @foreach($mentor as $m)
  <a href={{url('mentor/'.$m['id'])}} class="card mb-3">
      <button class="card-body shadow btn btn-outline-light text-dark">
        <div class="card-text media">
            <img src={{asset('images/img_avatar.jpg')}} alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
<h4>{{$m['name']}}</h4>
      <p>{{$m['organization']}}</p>    
      </div>
      </div><br />      
       </button>
    </a>
  @endforeach
</div>
@stop