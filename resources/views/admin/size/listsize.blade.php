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
                          <th>STT</th>
                          <th>Size</th>
                          <th>Ngày tạo</th>
                          <th>Ngày cập nhật</th>
                          <th>Trạng thái</th>
                          <td>Hành động</td>
                         </tr>
                    </thead>
                      <tbody>
                      <?php $stt = 0 ?>
                      @foreach($data as $value)
                       <?php $stt = $stt+1 ?>
                       <tr>
                         <td>{!!$stt!!}</td>
                         <td>{!!$value->size_name!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         <td>
                           @if( $value->Status=1)
                          
                           {!!"<button class='label label-success'>Display </button>"!!}
                           @else 
                            {!!"<button class='btn btn-danger'> Obscure</button>"!!}
                           @endif
                         </td>
                        
                         <td>
                           {!!Form::open(array('route'=>array('size-list.destroy',$value->id,),'method'=>'DELETE','id'=>"delete"))!!}
                                <button class=" btn btn btn-success listsize" data-id="{!!$value->id!!}" > <i class="fa fa-list" aria-hidden="true"></i> View</button>
                                <button class=" btn btn btn-primary xoasize " data-id="{!!$value->id!!}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                                <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            {!!Form::close()!!}
                          </td>
                        </tr>
                       @endforeach()
                      </tbody>
                  </table>
                     <a href="{{ action('SizeController@create') }}" class="btn btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
                </div>
                
                
        <!-- /page content -->
@endsection
