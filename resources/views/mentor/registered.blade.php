@extends('../app')

@section('title', 'Application complete')

@section('content')
<div class="container">
  
  <div class="modal fade" id="oneline">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          Your application has been successfully submitted! <br />
          We'll reply you soon!
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-warning btn-block ">Return to Homepage</button>
        </div>
        
      </div>
    </div>
  </div>

</div>

<script>
 $(window).on('load',function(){
        $('#oneline').modal('show');
    });
$('#oneline').modal({backdrop: 'static', keyboard: false})  
     </script>
@stop