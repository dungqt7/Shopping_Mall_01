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
      <h3>{{trans('backend.add-factory')}}</h3>
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
          {{Form::open(['method' => 'POST', 'action' => 'FactoryController@store','data-parsley-validate class'=>'form-horizontal form-label-left',
          'id'=>'demo-form2'])}}
          {{Form::token()}}
          <div class="form-group">
           {!! Form::label('danhdanh', 'Tên công ty', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
           <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('factory', $value = null, $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" =>'Vui lòng nhập tên công ty']) !!}  
            {!!$errors->first('factory')!!}
          </div>
        </div>
        <div class="row">
          <div class="form-group">
           {!! Form::label('danhdanh', 'Logo', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
           <div class="col-md-6 col-sm-6 col-xs-12">
             {!! Form::text('Logo', $value = null, $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" =>'Vui lòng nhập ảnh Logo công ty','id' => 'image']) !!} 
             {!!$errors->first('logo')!!}
             <a href="#" title="Chọn hình ảnh" class="btn btn-sm btn-success"  id="select-logo"> {{trans('backend.select-image')}}</a>
             <a href="#" title="Chọn hình ảnh" class="btn btn-sm btn-danger"  id="remove-logo">{{trans('backend.remove-image')}}</a>
           </div>
         </div>
       </div>
       <div class="form-group">
        {!! Form::label('danhdanh', 'Website', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
         {!! Form::text('website', $value = null, $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" =>'Vui lòng nhập website của công ty','id' => 'image']) !!} 
         {!!$errors->first('website')!!}
       </div>
     </div>
     {!! Form::label('danhdanh', 'status', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
     <div class="col-md-6 col-sm-6 col-xs-12">
       {!!Form::checkbox('status', '1', true);!!}
     </div>
     <div class="form-group">
      {!! Form::button('Add', array('class' => 'btn btn-primary glyphicon glyphicon-plus', 'id' => 'add')) !!}   
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection
