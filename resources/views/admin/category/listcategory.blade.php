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
    <h3>{{ trans('backend.category')}}</h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="col-6">
</div>
</div>
<table class="table table-striped table-bordered detail-view">
  <thead>
    <tr>
      <th>{{ trans('backend.stt')}}</th>
      <th>{{ trans('backend.namecate')}}</th>
      <th>{{ trans('backend.creat_at')}}</th>
      <th>{{ trans('backend.update_at')}}</th>
      <th>{{ trans('backend.status')}}</th>
      <td>{{ trans('backend.action')}}</td>
    </tr>
  </thead>
  <tbody>
      <?php $stt = 0 ?>
      @foreach($data as $value)
      <?php $stt = $stt+1 ?>
      <tr>
         <td>{!!$stt!!}</td>
         <td>
           {!!$value->cate_name!!}
         </td>
         <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
         <td>
         @if( $value->status=1)
         {!! "<span class='label label-success'>Success</span>" !!}
         @else 
         {!!"<span class='label label-danger'>Danger</span>"!!}
         @endif
       </td>
       <td>
        {!!Form::open(array('route'=>array('category-list.destroy',$value->id,),'method'=>'DELETE','id'=>"delete"))!!}
        <button class=" btn btn btn-success list" data-id="{!!$value->id!!}" > <i class="fa fa-list" aria-hidden="true"></i> {{trans('backend.view')}}</button>
        <button class=" btn btn btn-primary xoa " data-id="{!!$value->id!!}"><i class="fa fa-pencil" aria-hidden="true"></i> {{trans('backend.edit')}}</button>
        <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('backend.delete')}}</button>
        {!!Form::close()!!}
      </td>
    </tr>
    @endforeach()
</tbody>
</table>
<a href="{{ action('CategoryController@create') }}" class="btn btn btn-primary"> {{ trans('backend.add')}}</a>
</div>
@endsection
