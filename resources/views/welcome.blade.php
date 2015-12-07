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

  <div class="panel-body">
        <h3 style="color:#0066cc;">Auto Mobile Application</h3>

        @if(Session::get('data'))
            <div class="alert alert-dismissible alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong> <h3>{{Session::get('data')}}</h3></strong>
            </div>
        @endif
<h1>Public Dashboard</h1>

         </div>
  </div>
</div>
<div class="col-md-2"></div>
</div>
@stop