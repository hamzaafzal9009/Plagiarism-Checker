@extends('layouts.master')
@section('title', 'HOME PAGE')
@section('style')
<style>
.section-title{
margin-top: 30px;
background: rgb(239,98,159);
background: linear-gradient(90deg, rgba(239,98,159,1) 0%, rgba(238,205,163,1) 100%);
}
.section-title{
padding: 10px 0 10px 15px;
font-size: 20px;
font-weight: 300
}
.mr-top-70{
margin-top: 70px
}
.mr-top-20{
margin-top: 20px
}
.tools-ul{
display: block;
padding: 0;
margin: 0;
list-style: none;
margin-top: 30px;
color:black
}
.tools-li{
width: 33.33%;
padding: 4px 8px 4px 0;
float: left;
}
.tools-li a{
color: #cecece;
font-size: 15px;
display: block;
position: relative;
background: #F2F7F9;
border-radius: 3px;
padding: 8px;
}
.tools-li a span{
color: black
}
a:hover{
text-decoration: none;
color:black
}
.list-icon{
padding-top: 2px;
float: right
}

.fts {
margin-top: 50px;
}
.noP {
padding: 0;
}
.clear {
clear: both;
}
.sib {
padding: 3px;
}
.sib a {
border: 1px solid #fff;
border-radius: 10px;
color: #fff;
text-align: center;
display: block;
padding: 30px 2px;
transition: ease-in-out .15s all;
transform: scale(0.95);
box-sizing: border-box;
}
a {
outline: none;
}
.mr-top-50 .col-md-3{
margin-top: 10px
}
.header{
width: 100%;
padding-bottom: 20px;
background: rgb(101,78,163);
background: linear-gradient(90deg, rgba(101,78,163,1) 0%, rgba(234,175,200,1) 100%)
}
.h1-header-heading{
margin-top: 60px;
font-size: 50px;
font-weight: 300
}
.p-header-para{
font-style: italic;
font-weight: 300
}
.header-input-field{
/* background-color: transparent; */
background-color: rgba(255,255,255,0.4);
border: 1px solid white;
position: relative;
display: block;
outline: none;
margin: 0 auto;
padding: 10px;
color: #333;
/* -webkit-box-shadow: 0 2px 10px 1px rgba(0,0,0,0.5); */
/* box-shadow: 0 2px 10px 1px rgba(0,0,0,0.5); */
}

.header-input-field::placeholder {
color: white;
opacity: .5
}
.header-input-field:-ms-input-placeholder {
color: white;
}
.header-input-field::-ms-input-placeholder {
color: white;
}
.mr-top-50{
margin-top:50px
}
.tools-div{
width: 100%;
height: 125px;
padding: 3px;
border:1px solid white;
border-radius: 5px
}
.tools-div:hover{
background:rgba(255,255,255,0.1);
}
.tools-icon{
display: block;
margin:auto;
text-align: center;
padding-top: 30px;
font-size: 30px
}
.tools-text{
font-size: 14px;
font-weight: 300;
display: block;
text-align: center;
padding-top: 20px
}
.tool-link{
color: white
}
.tool-link:hover{
color: white;
text-decoration: none
}
</style>
@endsection
@section('content')
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="h1-header-heading">Lorem Ipsum is simply dummy text </h1>
        <p class="p-header-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
        <form method="get">
          <label for="search-header" class="label-header">Search</label>
          <input type="text" id="search-header" name="search_query" placeholder="Type to Search......" class="form-control header-input-field">
        </form>
      </div>
    </div>
    <div class="row mr-top-50">
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="{{url('plagiarism-checker')}}" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-image tools-icon"></i>
            <span class="tools-text">Reverse Image Search</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-pencil-alt tools-icon"></i>
            <span class="tools-text">Paraphrasing Tool</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-receipt tools-icon"></i>
            <span class="tools-text">Domain Authority Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-info tools-icon"></i>
            <span class="tools-text">Word Counter</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-filter tools-icon"></i>
            <span class="tools-text">Grammer Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="tool-link">
          <div class="tools-div">
            <i class="ti-files tools-icon"></i>
            <span class="tools-text">Plagiarism Checker</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mr-top-50">
    <div class="col-md-9">
      <div class="row">
        <div class="col-12">
            <h1 class="section-title"><i class="fa fa-file-alt"></i> &nbsp;&nbsp; Writing &amp; Education</h1>
            <ul class="tools-ul">
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
            </ul>
        </div>
        <div class="col-12">
            <h1 class="section-title"><i class="fa fa-file-alt"></i> &nbsp;&nbsp; Writing &amp; Education</h1>
            <ul class="tools-ul">
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
            </ul>
        </div>
        <div class="col-12">
            <h1 class="section-title"><i class="fa fa-file-alt"></i> &nbsp;&nbsp; Writing &amp; Education</h1>
            <ul class="tools-ul">
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
            </ul>
        </div>
        <div class="col-12">
            <h1 class="section-title"><i class="fa fa-file-alt"></i> &nbsp;&nbsp; Writing &amp; Education</h1>
            <ul class="tools-ul">
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
            </ul>
        </div>
        <div class="col-12">
            <h1 class="section-title"><i class="fa fa-file-alt"></i> &nbsp;&nbsp; Writing &amp; Education</h1>
            <ul class="tools-ul">
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
            </ul>
        </div>
        <div class="col-12">
            <h1 class="section-title"><i class="fa fa-file-alt"></i> &nbsp;&nbsp; Writing &amp; Education</h1>
            <ul class="tools-ul">
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
              <li class="tools-li">
                <a href="#">
                  <span>
                    Plagiarism Checker
                  </span>
                  <i class="ti-arrow-circle-right list-icon d-none d-lg-block"></i>
                </a>
              </li>
            </ul>
        </div>

    </div>
    <div class="col-md-3">
      {{-- CARD ADS SECTION --}}
    </div>
  </div>
</div>
@endsection
