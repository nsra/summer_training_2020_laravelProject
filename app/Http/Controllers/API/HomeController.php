<?php

namespace App\Http\Controllers\API;
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
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public $successStatus = 200;

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
        return response()->json(['success' => ['projects'=> $projects,
                                                'service_types' => $service_types,
                                                'company_features' => $company_features,
                                                'articles' => $articles,
                                                'images' => $images,
                                                'company' => $company,
                                                'order_steps' => $order_steps,
                                                'first_ad' => $first_ad,
                                                'second_ad' => $second_ad
                                                ]
                                ], $this->successStatus); 
        // return view('home', compact('projects', 'service_types', 'company_features', 'articles', 'projects', 'images', 'company', 'order_steps', 'first_ad', 'second_ad'));

    }

    public function working_team(){
        $company = Company::first();
        $service_types = Service_type::all();

        $working_teams = Team::paginate(4);
        return response()->json(['success' => ['working_teams'=> $working_teams,
                                                'service_types' => $service_types,
                                                'company' => $company,
                                                ]
                                ], $this->successStatus); 
        // return view('working_team', compact('working_teams', 'company', 'service_types'));

    }

    public function client_reviews(){
        $company = Company::first();
        $service_types = Service_type::all();

        $client_reviews = Client_review::paginate(4);

        return response()->json(['success' => [ 'client_reviews' => $client_reviews,
                                                'company' => $company,
                                                'service_types' => $service_types,
            
                                              ]
                                ], $this->successStatus); 
        // return view('client_reviews', compact('client_reviews', 'company', 'service_types'));

    }

    public function about_us(){
        $company = Company::first();
        $service_types = Service_type::all();
        $abouts = About::all();

        return response()->json(['success' => [ 'abouts' => $abouts,
                                                'company' => $company,
                                                'service_types' => $service_types
                                              ]
    
                                ], $this->successStatus); 
        // return view('about_us', compact('abouts', 'company', 'service_types'));
    }

    public function blogs(){
        $company = Company::first();

        $blogs = Article::paginate(16);
        $service_types = Service_type::all();

        return response()->json(['success' => [ 'blogs' => $blogs,
                                                'company' => $company,
                                                'service_types' =>$service_types
                                              ]
                                ], $this->successStatus); 
    }

  

    public function show_blog($id){
        $company = Company::first();
        $service_types = Service_type::all();
        $blog = Article::find($id);
        $related_blogs= Article::where('id', '!=', $id)->get();

        return response()->json(['success' => [ 'blog' => $blog,
                                                'company' => $company,
                                                'service_types' => $service_types,
                                                'related_blogs' => $related_blogs,
                                               ]], $this->successStatus); 
        // return view('blog_description', compact('blog', 'company', 'service_types', 'related_blogs'));
    }

    
}
