@extends('layouts.master')
@section('title', 'Plagiarism Checker')
@section('style')
<link rel="prefetch" href="{{ URL::asset('css/css-circule.css') }}" as="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/css-circule.css') }}">
<style>
.card{
  -webkit-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  -moz-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  margin-top:20px;
  color:black
}
.card-body h1{
  font-size:28px;
  text-align:center
}
.card-body p {
  text-align:center;
}
.input-box{
  border:1px dashed #cecece;
  margin-top:30px;
  min-height:200px;
  border-radius:7px;
  padding:20px;
  background-color:#F5F5F5
}
.input-box textarea{
  resize:none
}
.input-box p {
  text-align:right;
}
.btn-check-plag{
  display:block;
  margin:auto;
  margin-top:50px;
  cursor: pointer;
  font-size:18px
}
.ti-search{
  font-weight:bolder;
}
.alert-danger{
  background:transparent
}
.checked-bar{
  width: 100%; 
  height:20px; 
  line-height:20px
}
.result{
  margin-top:20px
}
.st0b {
  cursor: pointer;
  fill: transparent;
  stroke: #F5F5F5;
  stroke-width: 120;
  stroke-miterlimit: 10;
  stroke-dasharray: 1311;
  stroke-dashoffset: 0;
}
.st0-similar {

  cursor: pointer;
  fill: transparent;
  stroke: #b98bbb;
  stroke-width: 75;
  stroke-miterlimit: 10;
  stroke-dasharray: 1311;
  stroke-dashoffset: 1311;
}
.st0 {
  cursor: pointer;
  fill: transparent;
  stroke: #E93D40;
  stroke-width: 120;
  stroke-miterlimit: 10;
  stroke-dasharray: 1311;
  stroke-dashoffset: 1311;
}
.lowtext {
  cursor: pointer;
  fill: #9E9E9E;
}
.innerfont{
  cursor: pointer;
  fill: #9E9E9E;
  font-size:100px;
}
.percentBarTotal{
  width:70%;
  display:block;
  margin-top:-35px
}
.float-left{
  float:left
}
.importance-div{
  width:100%
}
.panel{
  color:black;
  border:1px solid #ddd;
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  -moz-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
}
.panel-heading{
  padding:10px;
  color: #333;
  background-color: #f5f5f5;
  border-bottom: 1px solid #ddd;
}
.panel-body{
  padding:10px;
  font-size:14px;
  color:#777
}
.importance-div{
  margin-top:30px
}
.results-bar .text-uniq{
  display: block;
  text-align: center;
    color: #4db53c;
    font-weight: bold;
}
.results-bar .text-plag{
  display: block;
  text-align: center;
    color: #f32013;
    font-weight: bold;
}
</style>
@endsection
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 ">
        <div class="card">
          <div class="card-body">
            <h1>Plagiarism Checker</h1>
            <p >To use this Plagiarism Checker, please copy and paste text in the input box below or select a file to upload, and then click on the <strong>Check Plagiarism</strong> button.</p>
            <div class="input-box">
              <form class="form" action="{{ route('plagiarism-checker.store') }}" method="post">
                @csrf
                <textarea name="text" id="text" rows="10" class="form-control" placeholder="Insert Text Here"></textarea>
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="alert-danger" role="alert">
                      Limit: 1000 Words per Search
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="alert-danger" role="alert">
                      <p id="result">Total Words: </p>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-check-plag" name="button"> <i class="ti-search"></i> Check Plagiarism</button>
              </form>
              <div class="row result">
                @isset($data)
                  <div class="col-12 col-md-6">
                    <svg class="percentBarTotal" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1020 750" xml:space="preserve">
                      <path class="st0b" d="M82.9,641.79c0-230.36,186.74-417.1,417.1-417.1s417.1,186.74,417.1,417.1"></path>
                      <path class="st0-similar" d="M82.9,641.79c0-230.36,186.74-417.1,417.1-417.1s417.1,186.74,417.1,417.1" style="stroke-dashoffset: 0px;"></path>
                      <path class="st0" d="M82.9,641.79c0-230.36,186.74-417.1,417.1-417.1s417.1,186.74,417.1,417.1" style="stroke-dashoffset: 1311px;"></path>
                      <text class="innerfont plagCount" x="50%" y="85%" text-anchor="middle" font-size="150">100%</text>
                      <text class="lowtext" x="8%" y="98%" text-anchor="middle" font-size="70">0%</text>
                      <text class="lowtext" x="50%" y="98%" text-anchor="middle" font-size="70">Checked</text>
                      <text class="lowtext" x="91%" y="98%" text-anchor="middle" font-size="70">100%</text>
                    </svg>
                  </div>  
                  <div class="col-12 col-md-6">
                      
                    <div class="row">
                      <div class="col-lg-6 results-bar">
                        <div class="c100 p{{$data['unique']}} green">
                            <span>{{$data['unique']}}%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                       <span class="text-uniq"> Unique </span>
                      </div>
                      <div class="col-lg-6 results-bar">
                        <div class="c100 p{{$data['plagrized']}} red">
                            <span>{{$data['plagrized']}}% </span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span class="text-plag"> Plagiarized </span>
                      </div>
                    </div>
                  </div>
                @endisset  
                 
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="card">
              <div class="card-body">
                
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-8">
          <div class="importance-div">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <strong>What is Plagiarism?</strong>
                  </div>
                  <div class="panel-body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <strong>How Plagiarism Word?</strong>
                  </div>
                  <div class="panel-body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <strong>Test Yourself</strong>
                  </div>
                  <div class="panel-body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  <script>
  $(document).ready(function() {
      $("#text").on('keyup', function() {
          var words = this.value.match(/\S+/g).length;
          if (words > 1000) {
              // Split the string on first 200 words and rejoin on spaces
              var trimmed = $(this).val().split(/\s+/, 1000).join(" ");
              $(this).val(trimmed + " ");
          }else if(words == 1000){
            $('#result').text("You Have Reached Your Limit");
          }
          else {
              $('#result').text("Total Words: " + words);
              // $('#word_left').text(10-words);
          }
      });
   });

</script>
@endsection
