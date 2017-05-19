<div class="page-title">
</div>
<div class="clearfix"></div>
</div>
<table class="table table-striped table-bordered detail-view">
    <tbody>
        @foreach($color as $value)
        <div>
            <tr>
            <th>{{ trans('backend.color-name') }}</th>
                <td>{!! $value->color_name !!}</td>
            </tr>
            <tr>
                <th>>{{ trans('backend.creat_at')}}</th>
                <td>{!! date('d-m-y h:i:s', strtotime($value->created_at)) !!}</td>
            </tr>
            <tr>
                <th>{{ trans('backend.update_at') }}</th>
                <td>{!!date('d-m-y h:i:s', strtotime($value->updated_at)) !!}</td>
            </tr>
            <tr>
                <th>{{ trans('backend.status') }}</th>
                <td>
                    @if($value->status == 1)
                    {{ Form::label('txthienthi', trans('backend.show'), ['class' => 'label label-success']) }}
                    @else
                    {{ Form::label('txthan', trans('backend.hide'), ['class' => 'label label-danger']) }}
                @endif
                </td>
            </tr>   
        </div>
        @endforeach
    </tbody>
</table>
</div>
