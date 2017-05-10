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
      <h3>Add Factory</h3>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{!!route('factory.postcreate')!!}" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên công ty<span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="factory">
                          {!!$errors->first('factory')!!}
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Logo <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="text" name="logo" id="image" style="width: 500px;margin-left:5px">
                          {!!$errors->first('logo')!!}

                          <a href="#" title="Chọn hình ảnh" class="btn btn-sm btn-success" style="margin-top: 5px" id="select-logo">Chọn ảnh </a>
                            <a href="#" title="Chọn hình ảnh" class="btn btn-sm btn-danger" style="margin-top: 5px" id="remove-logo">Xóa ảnh </a>

                        </div>
                      </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">website<span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="website">
                          {!!$errors->first('website')!!}
                        </div>
                      </div>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     {!!Form::checkbox('status', '1', true);!!}
                     </div>
                      
                    <div class="form-group">
                          <button type="submit" class="btn btn-success" style="margin-top: 25px;
    margin-right: 500px;">Submit</button>
                    </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
 @endsection
      