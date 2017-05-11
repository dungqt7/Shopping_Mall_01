  <div class="page-title">
            </div>
            <div class="clearfix"></div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                  <tbody>
                      @foreach($data as $value)
                      <div>
                         <tr>
                           <th>Tên danh mục</th>
                           <th>{!!$value->cate_name!!}</th>
                         </tr>
                         <tr>
                           <th>Tên danh mục cha</th>
                           <th>
                             @if($value->Parent_id==0)
                              {!!$value->cate_name!!}
                             @else
                              <?php
                               $parent= DB::table('categories')->where('id',$value['parent_id'])->first();
                               echo $parent->cate_name;
                              ?>
                              @endif
                           </th>
                          
                         </tr>
                          <tr>
                           <th>Ngày tạo</th>
                           <th>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</th>
                         </tr>
                         <tr>
                           <th>Ngày cập nhật</th>
                           <th>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</th>
                         </tr>
                         <tr>
                         <th>Trạng thái</th>
                         <th>
                         @if($value->status==1)
                          {!!"<button class='label label-success'> Hiển thị  </button>"!!}
                         @else
                          {!!"<button class='btn btn-danger'> Ẩn</button>"!!}
                         @endif
                         </th>
                      </tr>
                           
                       </div>
                      @endforeach
                    </tbody>
                </table>
            </div>
             