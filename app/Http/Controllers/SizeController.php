<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Size;
use App\Http\Requests\SizeRequest;

class SizeController extends Controller
{
    public function index()
    {
        $data=Size::all();
        return view('admin.size.listsize', compact('data'));
    }
    public function create()
    {
        $data=Size::all();
        $parent=Size::select('size_name', 'id', 'status')->get()->toArray();
        return view('admin.size.addsize', compact('data', 'parent'));
    }
    public function store(SizeRequest $request)
    {
        $size=new Size;
        $size->Size_name = $request->size;
        $time = time();
        $size->created_at=$time;
        $size->updated_at=$time;
        $size->status=$request->status;
        $size->save();
        return redirect()->route('size-list.index')
        ->with(['flash_level' => 'primary', 'flash_message' => 'Thêm size thành công']) ;
    }
    public function destroy($id)
    {
          $size=Size::findOrFail($id);
          $size->delete();
          return redirect()->route('size-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Xóa size thành công']) ;
    }
    public function edit(Request $request)
    {
        $data=Size::find($request->id);
        $parent=Size::select('Size_name', 'id', 'status')->get()->toArray();
        return view('admin.size.updatesize', compact('data', 'parent'));
    }
    public function xem(Request $request)
    {
          $data = Size::where('id', $request->id)
          ->select('id', 'Size_name', 'status', 'created_at', 'updated_at')->get();
          $parent = Size::select('Size_name', 'id', 'status')->get()->toArray();
         return view('admin.size.viewsize', compact('data', 'parent'));
    }
    public function update($id, SizeRequest $request)
    {
          $size=Size::find($id);
          $size->Size_name=$request->size;
          $size->status=$request->status;
          $time = time();
          $size->created_at=$time;
          $size->updated_at=$time;
          $size->save();
          return redirect()->route('size-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Cập nhật size thành công']) ;
    }
}
