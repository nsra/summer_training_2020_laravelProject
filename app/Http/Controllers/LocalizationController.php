<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function change($lang)
    {
        Session::put('locale', $lang);
        App::setLocale($lang);
        return redirect()->back();
    }
}
