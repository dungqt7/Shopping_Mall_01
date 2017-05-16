    @extends('admin.index')
    @section('content')
    <script type="text/javascript">
      function xacnhanxoa(msg) {
        if (window.confirm(msg)) {
          return true;
        }
        return false;
      }
    </script>
    <div class="page-title">
      <div class="title_left">
        <h3>Size</h3>
      </div>   
    </div>
    <div class="clearfix"></div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>{{ trans('backend.stt')}}</th>
          <th>{{ trans('backend.size')}}</th>
          <th>{{ trans('backend.creat_at')}}</th>
          <th>{{ trans('backend.update_at')}}</th>
          <th>{{ trans('backend.status')}}</th>
          <td>{{ trans('backend.action')}}</td>
        </tr>
      </thead>
      <tbody>
        <?php $stt = 0 ?>
        @foreach($size as $value)
        <?php $stt = $stt+1 ?>
        <tr>
         <td>{!!$stt!!}</td>
         <td>{!!$value->size_name!!}</td>
         <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
         <td>
           @if( $value->Status=1)

           {!!"<button class='label label-success'>Hiển thị</button>"!!}
           @else 
           {!!"<button class='btn btn-danger'>Ẩn</button>"!!}
           @endif
         </td>

         <td>
           {!!Form::open(array('route'=>array('size-list.destroy',$value->id,),'method'=>'DELETE','id'=>"delete"))!!}
           {{ Form::button('View', array('class' => 'btn btn btn-success listsize fa fa-list ', 'data-id' => $value->id)) }}
           {{ Form::button('Edit', array('class' => 'btn btn btn-primary xoasize fa fa-pencil ', 'data-id' => $value->id)) }}
           <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
           {!!Form::close()!!}
         </td>
       </tr>
       @endforeach()
     </tbody>
    </table>
    <a href="{{ action('SizeController@create') }}" class="btn btn btn-primary "> {{ trans('backend.add')}} <i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>


    <!-- /page content -->
    @endsection
