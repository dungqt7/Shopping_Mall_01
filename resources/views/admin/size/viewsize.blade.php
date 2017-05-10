  <div class="page-title">
            </div>
            <div class="clearfix"></div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                  <tbody>
                      @foreach($data as $value)
                      <div>
                         <tr>
                           <th>Size</th>
                           <td>{!!$value->Size_name!!}</td>
                         </tr>
                         <tr>
                           <th>Ngày tạo</th>
                           <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         </tr>
                         <tr>
                           <th>Ngày cập nhật</th>
                           <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         </tr>
                         <tr>
                         <th>Trạng thái</th>
                         <td>
                         @if($value->status==1)
                          {!!"<button class='label label-success'> Display</button>"!!}
                         @else
                          {!!"<button class='btn btn-danger'> Obscure</button>"!!}
                         @endif
                         </td>
                      </tr>
                           
                       </div>
                      @endforeach
                    </tbody>
                </table>
            </div>
             