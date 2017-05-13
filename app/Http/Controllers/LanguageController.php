<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
       
        if ($request->ajax()) {
            $request->session()->put('locale', $request->locale)
            $request->session()->flash('alert-success', ('app.Locale_change_Success');
        }
    }
}
