<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactoryController extends Controller
{
    public function index()
    {
        $parent= Factory::select('factory_name', 'factory_logo', 'factory_website', 'id')
         ->get()->toArray();
        $data=Factory::all();
        return view('admin.factory.listfactory', compact('data', 'parent'));
    }
    public function create()
    {
        $data=Factory::all();
        $parent=Factory::select('factory_name', 'factory_logo', 'factory_website', 'id')->get()->toArray();
        return view('admin.category.addfactory', compact('data', 'parent'));
    }
    public function edit(Request $request)
    {
        $data=Factory::find($request->id);
        $parent=Factory::select('factory_name', 'factory_logo', 'factory_website', 'id')->get()->toArray();
        return view('admin.factory.editfactory', compact('data', 'parent'));
    }
    public function store(CategoryRequest $request)
    {
        $factory=new Factory;
        $factory->factory_name = $request->factory;
        $factory->factory_logo = $request->logo;
        $factory->factory_website = $request->website;
        $time = time();
        $factory->created_at=$time;
        $factory->updated_at=$time;
        $factory->status=$request->status;
        $factory->save();
        return redirect()->route('factory-list.index')
        ->with(['flash_level' => 'primary', 'flash_message' => 'Thêm danh mục thành công']) ;
    }
    public function destroy($id)
    {
          $factory=Factory::findOrFail($id);
          $factory->delete();
          return redirect()->route('factory-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Xóa màu thành công']);
    }
    public function update($id, Request $request)
    {
          $Factory=Factory::find($id);
          $factory->factory_name=$request->factory;
          $factory->factory_logo=$request->logo;
          $factory->factory_website=$request->website;
          $time = time();
          $factory->created_at=$time;
          $factory->updated_at=$time;
          $factory->save();
          return redirect()->route('category-list.index')
          ->with(['flash_level' => 'primary', 'flash_message' => 'Cập nhật danh mục thành công']) ;
    }
}
