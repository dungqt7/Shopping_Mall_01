<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThanhVienRequest;

class ThanhVienController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(ThanhVienRequest $request)
    {
    }
    public function contact()
    {
        return view('frontend.blocks.contact');
    }
    public function blog()
    {
        return view('frontend.blocks.blog');
    }
    public function backend()
    {
        return view('admin.index');
    }
}
