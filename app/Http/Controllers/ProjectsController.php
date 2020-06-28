<?php

namespace App\Http\Controllers;
use App\Article;
use App\Service_type;
use App\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_types= Service_type::get();

//        $projects= Project::get();
        $projects = Project::with('service_type')->get();
        return view('projects.index', compact('projects', 'service_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_types = Service_type::all();
        return view('projects.create', compact('service_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //App::getLocale();
        //$request->validate($this->rules(), $this->messages());
//        $project_data = [];
//        $project_data['en'] = [
//            'title' => $request->en_title,
//            'description' => $request->en_description,
//        ];
//        $project_data['ar'] = [
//            'title' => $request->ar_title,
//            'description' => $request->ar_description,
//        ];

        $project= Project::create([
            'en' => [
                'title' => $request->en_title,
                'description' => $request->en_description,
            ],
            'ar' => [
                'title' =>  $request->ar_title,
                'description' =>  $request->ar_description,
            ]
        ]);

//dd($project_data);
//        $project= Project::create($project_data);
//        $project = new Project;
        if($request->file('article_image')) {
            $project->image = parent::uploadImage($request->file('project_image'));
        }
//        $project->service_type_id= $request->project_service_type_en;
//        $project
//            ->setTranslation('title', 'en', $request->en_title)
//            ->setTranslation('title', 'ar', $request->ar_title)
//            ->setTranslation('description', 'en', $request->en_description)
//            ->setTranslation('description', 'ar', $request->ar_description);
////            ->save();


        if ($project->save()){
            return redirect()->back()->with('success', trans('project.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('project.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();

            return response()->json(['status' => 200, 'message' => trans('project.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('project.error.deleted')]);
        }
    }
}
