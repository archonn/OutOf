@extends('../app')

@section('style')
<style>
 .gs {
  margin: 150px 0 150px 0;
 }

</style>
@stop


@section('content')
<div class="container">
  <p><div class="alert alert-success">
  <strong>Welcome!</strong> You are just one more step away! Please choose your desired SDG goal to participate in your desired country!
</div></p>
  <form action={{URL::to('mentee/getstarted')}} name="start" method="POST">
        <div class="input-group gs">
          <input type="hidden" name="_token" value={{csrf_token()}}>
           <div class="input-group-prepend">
                  <select class="form-control" name="country">
                       <option class="text-secondary" value="">Country</option>
                       @foreach($countries as $c)
                        <option value={{$c['countryID']}}>{{$c['countryName']}}</option>
                      @endforeach
                 </select>
           </div>
           <select class="form-control" name="topic">
                       <option class="text-secondary" value="">Sustainable Development Goals</option>
                       @foreach($topic as $t)
                        <option value={{$t['topicID']}}>{{$t['topicNo'].' - '.$t['topicName']}}</option>
                      @endforeach
          </select>
        </div>
        <div class="text-center">
           <button type="submit" class="btn btn-outline-primary shadow">Get Started!</button>
      </div>
  </form>
</div>
@stop
