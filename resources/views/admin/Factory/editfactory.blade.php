@extends('admin.index')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>{{ trans('backend.add-factory') }}</h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                {!! Form::open(array('route' => array('factory-list.destroy', $factory['id']), 'class' =>' form-horizontal form-label-left', 'method' => 'PUT')) !!}
                <div class="form-group">
                    {!! Form::label('labelcom', trans('backend.company'), ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('factory', $value = $factory['factory_name'], $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" => trans('backend.pleasecompanyname')]) !!}  
                        {!!$errors->first('factory')!!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        {!! Form::label('labellogo', trans('backend.logo'), ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('logo', $value = $factory['factory_logo'], $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" => trans('backend.pleaselogocompany'), 'id' => 'image']) !!} 
                            {!!$errors->first('logo') !!}
                            <a href="#" class="btn btn-sm btn-success" id="select-logo"> {{ trans('backend.select-image') }}</a>
                            <a href="#" class="btn btn-sm btn-danger" id="remove-logo">{{ trans('backend.remove-image') }}</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('txtweb', trans('backend.web'), ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('website', $value = $factory['factory_website'], $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" => trans('backend.pleasefillweb'), 'id' => 'image']) !!} 
                        {!!$errors->first('website')!!}
                    </div>
                </div>
                {!! Form::label('labelstaus', trans('backend.status'), ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ Form::checkbox('status', '1', $factory['status'] == 1 ? 'checked' : '') }}
                </div>
                <div class="form-group">
                    {!! Form::submit(trans('backend.update'), ['class' => 'btn btn-primary glyphicon glyphicon-plus', 'id' => 'add']) !!}   
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
