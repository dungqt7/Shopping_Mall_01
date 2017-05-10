<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use App\Color;

class ColorController extends Controller
{
    public function index()
    {
        $data=Color::all();
        return view('admin.color.listcolor', compact('data'));
    }
    public function create()
    {
        $data=Color::all();
        $parent=Color::select('Color_name', 'id', 'Status')->get()->toArray();
        return view('admin.color.addcolor', compact('data', 'parent'));
    }
    public function store(ColorRequest $request)
    {
        $color=new Color;
        $color->color_name = $request->color;
        $time = time();
        $color->created_at=$time;
        $color->updated_at=$time;
        $color->status=$request->status;
        $color->save();
        return redirect()->route('color-list.index')
        ->with(['flash_level' => 'primary', 'flash_message' => 'Thêm màu thành công']) ;
    }
    public function destroy($id)
    {
          $color=Color::findOrFail($id);
          $color->delete();
          return redirect()->route('color-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Xóa màu thành công']);
    }
    public function edit(Request $request)
    {
        $data=Color::find($request->id);
        $parent=Color::select('Color_name', 'id', 'Status')->get()->toArray();
        return view('admin.Color.updatecolor', compact('data', 'parent'));
    }
    public function xem(Request $request)
    {
          $data = Color::where('id', $request->id)
          ->select('id', 'Color_name', 'Status', 'created_at', 'updated_at')->get();
          $parent = Color::select('Color_name', 'id', 'Status')->get()->toArray();
         return view('admin.Color.viewcolor', compact('data', 'parent'));
    }
    public function update($id, Request $request)
    {
          $color=Color::find($id);
          $color->Color_name=$request->color;
          $color->Status=$request->status;
          $time = time();
          $color->created_at=$time;
          $color->updated_at=$time;
          $color->save();
          return redirect()->route('color-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Cập nhật màu thành công']);
    }
}
