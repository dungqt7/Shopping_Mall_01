@if(count($errors)>0)
<ul>
   @foreach($errors->all() as $error )
    
	<li> {!!$error!!}</li>
	@endforeach
</ul>
@endif
<form enctype="multipart/form-data"  action="{!!route('postDangKy')!!}" method="POST" name="add">
<input type="hidden" name="_token" value="{!!csrf_token()!!}">
  	<table>
  		<tr>
  				<td>Môn học</td>
  				<td>
  				<input type="text" name="Mônhoc" id="">
  				{!!$errors->first('Mônhoc')!!}
  				</td>
  			</tr>
  			<tr>
  				<td>Gía tiền</td>
  				<td>
  				<input type="text" name="Giatiên" id="">
  				{!!$errors->first('Giatiên')!!}
  				</td>
  			</tr>
  			<tr>
  				<td>Gỉang viên</td>
  				<td>
  				<input type="text" name="Giangviên" id="">
  				{!!$errors->first('Giangviên')!!}
  				</td>
  			</tr>
  			<tr>
  				<td>Hình ảnh</td>
  				<td>
  				 <input type="file" name="image" id="">
  				</td>
  			</tr>
  			<tr>
  				<td></td>
  				<td><input type="submit" name="send" value="Thêm mới"></td>
  			</tr>	
  	</table>
	
</form>