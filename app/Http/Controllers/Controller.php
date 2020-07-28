<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function userLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('show.multiguard_login');
    }

    public function uploadImage($image)
    {
        $dir= 'image';
        $uploadedImage = $image;
        $imageName = time() . $uploadedImage->getClientOriginalName();
        $direction = public_path($dir . '/');
        $uploadedImage->move($direction, $imageName);
        return 'image/' . $imageName;
    }
}
