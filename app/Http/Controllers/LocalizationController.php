<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function change($lang = 'en')
    {
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
