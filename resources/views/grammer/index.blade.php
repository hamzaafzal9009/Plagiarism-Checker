@extends('layouts.master')
@section('title', 'Plagiarism Checker')
@section('style')
  .plag-container{
    margin-top:15px;
    color:black
  }
  .hiddenSpellError
  {
     border-bottom: 2px solid red;
     cursor: default;
  }

  .hiddenGrammarError
  {
     border-bottom: 2px solid green;
     cursor: default;
  }

  .hiddenSuggestion
  {
     border-bottom: 2px solid blue;
     cursor: default;
  }

  .AtD_proofread_button
  {
     width: 14px;
     height: 14px;
     background-image: url('../images/writing.gif');
     display: block;
  }

  .AtD_edit_button
  {
     width: 14px;
     height: 14px;
     background-image: url('../images/editing.gif');
     display: block;
  }

  #suggestmenu
  {
     background: #fff;
     position: absolute;
     display: none;
     z-index: 9999;
     overflow: none;
     margin-top: 1px;
     text-align: left;
     font-size: 12px;
     font-family: Tahoma, Verdana, Arial, Helvetica;
  }

  #suggestmenu strong
  {
     background: #ddd;
     font-weight: bold;
     padding:3px 6px 3px 6px;
     display:block;
     border:1px solid #ccc;
     color: black;
  }

  #suggestmenu em
  {
     text-align:center;
     padding:3px 6px 3px 6px;
     display:block;
     border-top:1px solid #ccc;
     border-left:1px solid #ccc;
  }

  #suggestmenu a, #suggestmenu a:visited
  {
     background: #fff;
     border-left:1px solid #bbb;
     border-right:1px solid #bbb;
     padding:3px 6px 3px 6px;
     display:block;
     margin:0px;
     text-decoration:none;
     color:#333;
     outline:none
  }

  #suggestmenu a.first, #suggestmenu a.first:visited
  {
     border-top:1px solid #ccc
  }

  .spell_sep_bottom
  {
     border-bottom: 1px solid #ccc;
  }

  .spell_sep_top
  {
     border-top: 1px solid #ccc;
  }

  #suggestmenu a:hover
  {
     color:#000;
     background: #dbecf3
  }

  #suggestmenu .foot
  {
     border-top:1px solid #ddd;
     background:#fff
  }

  #suggestmenu .foot a, #suggestmenu .foot a:visited
  {
     outline:none
  }

@endsection
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 plag-container">

        <textarea id="textInput" class="form-control" rows="10">The purpoce of a spell checker is to check the text four spelling and typeing errors. The checker finds errors througout the text.

        When the spell checker finds an questionable word, it highlights it and suggests the mpst likely variants too replace the questionable word. You can select the variant and replace the wrrd or leave the word unanged.</textarea>

         <p><a href="javascript:check()" id="checkLink">Check Spelling</a></p>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  <script src="{{ asset('js/grammerchecker/csshttprequest.js')}}"></script>
  <script src="{{ asset('js/grammerchecker/jquery.atd.js')}}"></script>
  <script src="{{ asset('js/grammerchecker/jquery.atd.textarea.js')}}"></script>

  <script>
 function check()
 {
    AtD.checkTextAreaCrossAJAX('textInput', 'checkLink', 'Edit Text');
 }
 </script>
@endsection
