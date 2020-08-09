<?php

namespace App\Http\Controllers;
use App\PermissionTranslation;
use App\Service_type;
use App\Ad;
use App\Client_review;
use App\Company_feature;
use App\Article;
use App\Order_step;
use App\Project;
use App\Image;
use App\Team;
use App\About;
use App\Company;
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

    public function home(){

        $projects = Project::has('images')->orderBy('id', 'desc')->take(8)->get();
        $service_types = Service_type::all();
        $company_features = Company_feature::all();
        $articles = Article::query()->take(4)->get()->sortByDesc('id');

        $projects = $projects;

        $images = Image::all();
        $first_ad = Ad::where('number','=','1')->first();
        $second_ad = Ad::where('number','=','2')->first();
        $company = Company::first();

        $order_steps = Order_step::all();

        return view('home', compact('projects', 'service_types', 'company_features', 'articles', 'projects', 'images', 'company', 'order_steps', 'first_ad', 'second_ad'));

    }

    public function working_team(){
        $company = Company::first();
        $service_types = Service_type::all();

        $working_teams = Team::paginate(4);

        return view('working_team', compact('working_teams', 'company', 'service_types'));

    }

    public function client_reviews(){
        $company = Company::first();
        $service_types = Service_type::all();

        $client_reviews = Client_review::paginate(4);

        return view('client_reviews', compact('client_reviews', 'company', 'service_types'));

    }

    public function about_us(){
        $company = Company::first();
        $service_types = Service_type::all();
        $abouts = About::all();
        return view('about_us', compact('abouts', 'company', 'service_types'));
    }

    public function blogs(){
        $company = Company::first();

        $blogs = Article::paginate(16);
        $service_types = Service_type::all();

        return view('blogs', compact('blogs', 'company', 'service_types'));

    }

    public function show_blog($id){
        $company = Company::first();
        $service_types = Service_type::all();
        $blog = Article::find($id);
        $related_blogs= Article::where('id', '!=', $id)->get();
        // dd($related_blogs);
        return view('blog_description', compact('blog', 'company', 'service_types', 'related_blogs'));
    }

    
}
