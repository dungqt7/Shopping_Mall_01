  <div class="page-title">
            </div>
            <div class="clearfix"></div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                  <tbody>
                      @foreach($size as $value)
                      <div>
                         <tr>
                           <th>{{trans('backend.size')}}</th>
                           <td>{!!$value->size_name!!}</td>
                         </tr>
                         <tr>
                           <th>{{ trans('backend.creat_at')}}</th>
                           <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         </tr>
                         <tr>
                           <th>{{ trans('backend.update_at')}}</th>
                           <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         </tr>
                         <tr>
                         <th>{{ trans('backend.status')}}</th>
                         <td>
                         @if($value->status==1)
                          {!!"<button class='label label-success'>Hiển thị</button>"!!}
                         @else
                          {!!"<button class='btn btn-danger'>Ẩn</button>"!!}
                         @endif
                         </td>
                      </tr>    
                       </div>
                      @endforeach
                    </tbody>
                </table>
            </div>
             