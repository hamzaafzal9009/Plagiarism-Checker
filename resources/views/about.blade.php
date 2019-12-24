@extends('layouts.master')
@section('title', 'About-us')
@section('style')
.header-contact{
  min-height:100px;
  width:100%;
  background: rgb(0,176,155);
  background: linear-gradient(90deg, rgba(0,176,155,1) 0%, rgba(150,201,61,1) 100%)
}
.header-contact h1{
    text-align:center;
    padding-top:30px;
    font-size:36px;
    font-wieght:100
}
.about-us-container{
  margin-top:30px
}
.panel{
  color:black;
  border:1px solid #ddd;
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
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
@endsection

@section('content')
  <div class="header-contact">
    <h1>About US</h1>
  </div>
  <div class="container about-us-container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Who are we?</strong>
        </div>
        <div class="panel-body">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Technologies used in website?</strong>
        </div>
        <div class="panel-body">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>What we provide?</strong>
        </div>
        <div class="panel-body">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>What is the queries limit for visitors and for free users?</strong>
        </div>
        <div class="panel-body">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
        </div>
    </div>
  </div>
@endsection
