<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $parent = Categories::select('Cate_name', 'id', 'parent_id')->get()->toArray();
        $data = Categories::all();
        return view('admin.category.listcategory', compact('data', 'parent'));
    }
    public function create()
    {
        $data = Categories::all();
        $parent = Categories::select('Cate_name', 'id', 'parent_id')->get()->toArray();
        return view('admin.category.addcategory', compact('data', 'parent'));
    }
    public function edit(Request $request)
    {
        $data = Categories::find($request->id);
        $parent = Categories::select('cate_name', 'id', 'parent_id')->get()->toArray();
        return view('admin.category.updatecategory', compact('data', 'parent'));
    }
    public function store(CategoryRequest $request)
    {
        $cate = new Categories;
        $cate->cate_name = $request->name;
        $cate->parent_id = $request->catparent;
        $time = time();
        $cate->created_at = $time;
        $cate->updated_at = $time;
        $cate->status = $request->status;
        $cate->save();
        return redirect()->route('category-list.index')
        ->with(['flash_level' => 'primary', 'flash_message' => 'Thêm danh mục thành công']) ;
    }
    public function destroy($id)
    {
          $parent = Categories::where('Parent_id', $id)->count();
        if ($parent == 0) {
            $cate = Categories::find($id);
            $cate->delete();
            return redirect()->route('category-list.index')
            ->with(['flash_level' => 'primary', 'flash_message' => 'Xoá danh mục thành công']);
        } else {
            // echo "<script type='text/javascript'>
            //   alert('Sorry!You can't delte);
            //   window.location='";
            //         echo route('admin.category.listcategory');
            // echo"'
            // </script>";
            return redirect()->route('category-list.index')
            ->with(['flash_level' => 'danger', 'flash_message' => 'Không được xóa danh mục này']);
        }
    }
    public function update($id, Request $request)
    {
          $cate = Categories::find($id);
          $cate->update($request->id);
          $cate->save();
          return redirect()->route('category-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Cập nhật danh mục thành công']) ;
    }
    public function xem(Request $request)
    {
          $data = Categories::where('id', $request->id)->select('cate_name', 'id', 'parent_id', 'created_at', 'updated_at', 'status')->get();
          $parent = Categories::select('Cate_name', 'id', 'parent_id')->get()->toArray();
         return view('admin.category.viewcategory', compact('data', 'parent'));
    }
    public function frontend(Request $request)
    {
        $category = Categories::where('parent_id', 0);
        $cate_parent = Categories::where('parent_id', $request->id);
        return view('frontend.blocks.section-menu', compact('category', 'cate_parent'));
    }
}
