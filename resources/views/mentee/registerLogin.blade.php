@extends('../app')

@section('title', 'Login or Create account')

@section('style')
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
@stop

@section('content')
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
@stop