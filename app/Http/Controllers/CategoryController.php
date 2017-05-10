<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $parent= Category::select('Cate_name', 'id', 'parent_id')->get()->toArray();
        $data=Category::all();
        return view('admin.category.listcategory', compact('data', 'parent'));
    }
    public function create()
    {
        $data=Category::all();
        $parent=Category::select('Cate_name', 'id', 'parent_id')->get()->toArray();
        return view('admin.category.addcategory', compact('data', 'parent'));
    }
    public function edit(Request $request)
    {
        $data=Category::find($request->id);
        $parent=Category::select('cate_name', 'id', 'parent_id')->get()->toArray();
        return view('admin.category.updatecategory', compact('data', 'parent'));
    }
    public function store(CategoryRequest $request)
    {
        $cate=new Category;
        $cate->cate_name = $request->name;
        $cate->parent_id = $request->catparent;
        $time = time();
        $cate->created_at=$time;
        $cate->updated_at=$time;
        $cate->status=$request->status;
        $cate->save();
        return redirect()->route('category-list.index')
        ->with(['flash_level' => 'primary', 'flash_message' => 'Thêm danh mục thành công']) ;
    }
    public function destroy($id)
    {
          $parent = Category::where('Parent_id', $id)->count();
        if ($parent == 0) {
            $cate= Category::find($id);
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
          $cate=Category::find($id);
          $cate->cate_name=$request->name;
          $cate->parent_id=$request->catparent;
          $time = time();
          $cate->created_at=$time;
          $cate->updated_at=$time;
          $cate->save();
          return redirect()->route('category-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Cập nhật danh mục thành công']) ;
    }
    public function xem(Request $request)
    {
          $data = Category::where('id', $request->id)
          ->select('id', 'Cate_name', 'Parent_id', 'status', 'created_at', 'updated_at')->get();
          $parent = Category::select('Cate_name', 'id', 'parent_id')->get()->toArray();
         return view('admin.category.viewcategory', compact('data', 'parent'));
    }
}
