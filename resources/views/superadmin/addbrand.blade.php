@extends('layouts.adminmaster')
@section('title')
Add Brand
@stop
@section('body')
 <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add Brand</h3>
  </div>
  <div class="panel-body">
           {!! Form::open(['files'=>'true' ]) !!}
                <div class="form-body pal">
                <div class="row">
                 @if(Session::get('data'))
            <div class="alert alert-dismissible alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong> <h3>{{Session::get('data')}}</h3></strong>
            </div>
        @endif
                <div class="col-md-12">
                    <div class="form-group">
                        {!!Form::text('brand_name','',['class'=>'form-control','placeholder'=>'Add Car Brand Name'])!!}
                    </div>
                </div>

                </div>
            <div class="form-actions text-right pal">
                 {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
            </div>
                {!!Form::close()!!}
  </div>
</div>
    </div>
</div>
</div>
@stop







