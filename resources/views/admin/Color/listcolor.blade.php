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
                <h3>Color</h3>
              </div>
             
            </div>
            <div class="clearfix"></div>
              <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên màu</th>
                          <th>Ngày tạo</th>
                          <th>Ngày cập nhật</th>
                          <th>Trạng thái</th>
                          <td>Hành động</td>
                         </tr>
                    </thead>
                      <tbody>
                      <?php $stt = 0 ?>
                      @foreach($data as $value)
                      <?php $stt=$stt+1 ?>
                       <tr>
                         <td>{!!$stt!!}</td>
                         <td>{!!$value->color_name!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         <td>
                           @if( $value->Status=1)
                          
                           {!!"<button class='label label-success'> Hien thi </button>"!!}
                           @else 
                            {!!"<button class='btn btn-danger'> An</button>"!!}
                           @endif
                         </td>
                        
                         <td>
                            {!!Form::open(array('route'=>array('color-list.destroy',$value->id),'method'=>'DELETE'))!!}
                                <p class=" btn btn btn-success listcolor "  data-id="{!!$value->id!!}" ><i class="fa fa-list" aria-hidden="true"></i> Xem</p>
                                <p class=" btn btn btn-primary xoacolor "  data-id="{!!$value->id!!}"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</p>
                                 <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                            {!!Form::close()!!}
                          </td>
                        </tr>
                       @endforeach()
                      </tbody>
                  </table>
                     <a href="{{ action('ColorController@create') }}" class="btn btn btn-primary">Thêm</a>
                </div>
                
                
        <!-- /page content -->
@endsection
