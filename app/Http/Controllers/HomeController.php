<?php

namespace App\Http\Controllers;
use App\PermissionTranslation;
use App\Service_type;
use App\Company_feature;
use App\Article;
use App\Project;
use App\Image;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function admin_index()
    {
        return view('base_layout.admin_dashboard');
    }

    public function show_service_types(){
        $projects=Project::all();
        return view('home', [
            'service_types' => Service_type::all(),
            'company_features' => Company_feature::all(),
            'articles' => Article::query()->take(4)->get()->sortByDesc('id'),
            'projects' => $projects->sortByDesc('id'),
            'images'=> Image::all(),
        ]);

    }

    
}
