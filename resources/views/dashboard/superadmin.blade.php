@extends('layouts.adminmaster')
@section('title')
Dashboard | SuperAdmin
@stop
@section('head')

@stop
@section('body')


@if(Session::get('data'))
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> <h3>{{Session::get('data')}}</h3></strong>
        </div>
    @endif
   <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#">
          <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
        </a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded"> Users</div>
          <div class="circle-tile-number text-faded ">265</div>
          <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#">
          <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
        </a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Users Online </div>
          <div class="circle-tile-number text-faded ">10</div>
          <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>  


@stop