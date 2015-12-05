@extends('layouts.master')
@section('title')
Login
@stop
@section('head')
@stop
@section('body')
<div class="row text-center">
  <div class="col-md-2"></div>
<div class="col-md-8">
   <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Login</h3>
  </div>
  <div class="panel-body">
        <h3 style="color:#0066cc;">Auto Mobile Application</h3>

        @if(Session::get('data'))
            <div class="alert alert-dismissible alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong> <h3>{{Session::get('data')}}</h3></strong>
            </div>
        @endif
        <hr>
        {!! Form::open() !!}
        Email:
        {!! Form::text('email','',['class'=>'form-control','placeholder'=>'Give Your Email Address','required']) !!}
        <br>
        Password:
        {!! Form::password('pass',['class'=>'form-control','placeholder'=>'Enter Password','required']) !!}
        <br>
        {!! Form::submit('Login',['class'=>'form-control btn btn-primary']) !!}
        {!! Form::close() !!}
        <br>
        <br>
         </div>
  </div>
</div>
<div class="col-md-2"></div>
</div>
@stop