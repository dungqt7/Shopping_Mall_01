<div class="clearfix"></div>
    <table class="table table-bordered">
      <tbody>
        @foreach($factory as $value)
       <tr>
         <td>{{trans('backend.factory-name')}}</td>
         <td>{!!$value->factory_name!!}</td>
      </tr>
      <tr>
         <td>{{trans('backend.logo')}}</td>
         <td><img src="{!!$value->factory_logo!!}" alt=""></td>
      </tr>
        <tr>
         <td>{{trans('backend.website')}}</td>
         <td>{!!$value->factory_website!!}</td>
      </tr>
       </tr>  
          <td>{{ trans('backend.creat_at')}}</td>
         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
      </tr>
      <tr>
       <td>{{ trans('backend.update_at')}}</td>
       <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
      </tr>
       <tr>
           <td>{{ trans('backend.status')}}</td>
           <td>
           @if( $value->status=1)  
           {!!"<button class='label label-success'> Hiển thị </button>"!!}
           @else 
           {!!"<button class='btn btn-danger'>Ẩn</button>"!!}
           @endif
         </td>
         
      </tr>
      @endforeach()
    </tbody>
    </table>