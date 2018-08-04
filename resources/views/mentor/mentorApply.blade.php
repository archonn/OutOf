@extends('../app')

@section('title', 'Mentor Application')

@section('content')
<div class="container">
  <h2 class="text-center text-info mt-3">Apply for mentor</h2>
  <hr />
<form action={{url('mentor')}} method="POST">
  {{csrf_field()}}
      <input type="text" class="form-control" name="name" placeholder="Full Name">
      <input type="text" class="form-control mt-2" name="email" placeholder="Email">
      <input type="text" class="form-control mt-2" name="organization" placeholder="Organization">
      <div class="form-group mt-2">
        <label for="apparea">Why do you want to apply as a mentor? :</label>
            <textarea class="form-control" rows="5" id="apparea" name="why"></textarea>
      </div> 
    <button type="submit" class="btn btn-outline-warning mt-5 shadow btn-block">Apply</button>
  </form>
</div>
@stop