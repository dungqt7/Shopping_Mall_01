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
      <h3>{{ trans('backend.add_category')}}</h3>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
    {{Form::open(['method' => 'POST', 'action' => 'CategoryController@store','data-parsley-validate class'=>'form-horizontal form-label-left',
          'id'=>'demo-form2'])}}
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
           <div class="clearfix"></div>
         </div>
         <div class="x_content">
          <br />
          {{Form::token()}}
          <div class="form-group">
            {!! Form::label('danhdanh', 'Tên danh mục', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('name', $value = null, $attribute = ['class' => 'form-control col-md-7 col-xs-12', "placeholder" =>'Vui lòng nhập tên danh mục']) !!}  
              {!!$errors->first('factory')!!}
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              {!! Form::label('danhdanh', 'Danh mục cha', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
                <center>
             {{ Form::select('catparent',
               $categories->toArray(), 
               ['class' =>'form-control col-md-6 col-sm-6 col-xs-12', 'id' => 'locID']) 
             }}
           </center>
             </div>
           </div>
         </div>
         <div class="form-group">
          {!! Form::label('danhdanh', 'status', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12' )) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
           {!!Form::checkbox('status', '1', true);!!}
          </div>
        </div>
       <div class="form-group">
        {!! Form::submit('Add', array('class' => 'btn btn-primary glyphicon glyphicon-plus', 'id' => 'add')) !!}   
      </div>
    </div>
    </div>
    {{Form::close()}}
    </div>
    </div>
    </div>
    @endsection
