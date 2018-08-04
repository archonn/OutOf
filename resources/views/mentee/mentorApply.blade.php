@extends('../app')

@section('title', 'Apply For Mentor')

@section('style')
  <style>
.bm {
  -webkit-box-shadow: 0px 3px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow:    0px 3px 0px rgba(0, 0, 0, 0.3);
    box-shadow:         0px 3px 0px rgba(0, 0, 0, 0.3);
}

.bm:active {
  margin-top: 3px;
    margin-bottom: -3px;
}

#bm1 {
  width: 300px;
  margin: 10px 0 10px 0;
}

#mendiv {
  padding: 20px 3px 20px 3px;
}

.ribbon {
  position: relative;
  background: #0070BB;
  color: white;
  display: block;
  width: 50%;
  margin: 0 auto;
  text-align: center;
  z-index: 3;
}
.ribbon:before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 12px 12px 0;
  border-color: transparent #003355 transparent transparent;
  left: -1px;
  bottom: -12px;
  z-index: 1;
}
.ribbon:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 12px 12px 0 0;
  border-color: #003355 transparent transparent transparent;
  right: -1px;
  bottom: -12px;
  z-index: 1;
}
.ribbon .left-fold {
  background-color: #005188;
  background-image: -webkit-linear-gradient(-180deg, #005188, #0061a2);
  background-image: linear-gradient(-90deg,#005188, #0061a2);
  position: absolute;
  height: 50px;
  width: 25px;
  left: -15px;
  bottom: -12px;
  display: block;
  margin: 0;
  border-right: 1px solid #005188;
}
.ribbon .left-fold:before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 15px 25px 0;
  border-color: transparent #0061a2 transparent transparent;
  left: -15px;
  top: 0;
}
.ribbon .left-fold:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 25px 15px;
  border-color: transparent transparent #0061a2 transparent;
  left: -15px;
  bottom: 0;
}
.ribbon h3 {
  z-index: 2;
  position: relative;
  background: #0070BB;
  width: 100%;
  display: block;
  font-size: 26px;
  line-height: 1.3em;
  padding: 15px 0;
  font-weight: 600;
  letter-spacing: 0.5px;
}
.ribbon .right-fold {
  background-color: #005188;
  background-image: -webkit-linear-gradient(-360deg, #005188, #0061a2);
  background-image: linear-gradient(90deg,#005188, #0061a2);
  position: absolute;
  height: 50px;
  width: 25px;
  right: -15px;
  bottom: -12px;
  display: block;
  margin: 0;
  border-left: 1px solid #005188;
}
.ribbon .right-fold:before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 25px 15px 0 0;
  border-color: #0061a2 transparent transparent transparent;
  right: -15px;
  top: 0;
}
.ribbon .right-fold:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 25px 0 0 15px;
  border-color: transparent transparent transparent #0061a2;
  right: -15px;
  bottom: 0;
}

</style>

@stop

@section('content')
  <div class="text-center mt-3 container border rounded shadow" id="mendiv">
    <div class="ribbon">
  <span class="left-fold">
  </span>
  <h3>Mentorship</h3>
  <span class="right-fold">
  </span>
</div>
      <a href={{url('mentee/findmentor')}} class="btn btn-outline-success bm btn-lg" id="bm1" role="button">Find Mentors!</a><br />
      <span>or</span><br />
      <a href="#" class="btn bm btn-outline-secondary" role="button">Assign Automatically</a>
  </div>
@stop