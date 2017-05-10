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
                <h3>Add Cateory</h3>
              </div>
             </div>
      <div class="clearfix"></div>
{{-- <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> --}}
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                     {{Form::open(['method' => 'POST', 'action' => 'CategoryController@store','data-parsley-validate class'=>'form-horizontal form-label-left',
                     'id'=>'demo-form2'])}}
                     {{Form::token()}}

                      <div class="form-group">
                       {!! Form::label('danhdanh', 'Tên danh mục', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('name', $value = null, $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" =>'Vui lòng nhập tên danh mục']) !!}  
                          {!!$errors->first('name')!!}
                        </div>
                      </div>

                      <div class="form-group">
                       {!! Form::label('danhdanh', 'Danh mục cha', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
                      <center>
                        <select class="form-control col-md-6 col-sm-6 col-xs-12" id="locID" style="width:500px;margin-left: 10px;" name="catparent">
                       <option value="0">Please Select</option>
                       @foreach($parent as $value)
                       <option value="{!!$value['id']!!}" name="catparent" >{!!$value['Cate_name']!!}</option>
                       @endforeach

                      </select>
                      </center>
                      </div>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái <span class="required">*</span>
                        </label>
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
    