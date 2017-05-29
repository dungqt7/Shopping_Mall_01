<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Models\Categories;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use App\Models\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $factories = Factory::all();
        $categories = Categories::where('parent_id', 0)->get();
        $productmenu = DB::table('products')
                       ->select('product_name', 'product_image', 'price', 'id')
                       ->skip(0)->take(8)->get();
        $product = Product::all();
        $products = Product::select('product_name', 'product_image', 'price')->orderby('id', 'DESC')->skip(0)->take(4)->get();
        view()->share([
          'factories' => $factories,
          'categories' => $categories,
          'productmenu' => $productmenu,
          'product' => $product,
          'products' => $products,

         ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
