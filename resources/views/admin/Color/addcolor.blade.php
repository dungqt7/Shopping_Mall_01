@extends('admin.index')
@section('content')
<div class="page-title">
@if(count($errors)>0)
<ul>
   @foreach($errors->all() as $error )
    
  <li> {!!$error!!}</li>
  @endforeach
</ul>
@endif
              <div class="title_left">
                <h3>Add Color</h3>
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
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{!!route('color-list.store')!!}">
                      {{Form::token()}}  
                      <div class="form-group">
                        {!! Form::label('danhdanh', 'Tên màu', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           {!! Form::text('name', $value = null, $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" =>'Vui lòng nhập tên màu sắc']) !!}  
                          {!!$errors->first('color')!!}
                        </div>
                      </div>
                       {!! Form::label('danhdanh', 'status', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     {!!Form::checkbox('status', '1', true);!!}
                     </div>
                      
                    <div class="form-group">
                        {!! Form::button('Add', array('class' => 'btn btn-primary add glyphicon glyphicon-plus', 'id' => 'add')) !!}   
                   </div>
                </form>
                  </div>
                </div>
              </div>
            </div>
       @endsection
    