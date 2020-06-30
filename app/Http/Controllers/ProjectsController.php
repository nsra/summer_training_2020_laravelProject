<?php

namespace App\Http\Controllers;
use App\Article;
use App\Service_type;
use App\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = DB::table('projects')
            ->join('project_translations', 'projects.id', '=', 'project_translations.project_id')
            ->join('service_types', 'projects.service_type_id', '=', 'service_types.id')
            ->join('service_type_translations', 'service_type_translations.service_type_id', '=', 'service_types.id')
            ->select('project_translations.title',
                'project_translations.project_locale',
                'project_translations.description',
                'project_translations.project_id',
                'service_type_translations.name',
                'service_type_translations.service_type_locale')
            ->where([]);

        $locale= Session::get('locale');
        if ($request->has('title'))
            $projects = $projects->where('title', 'like', '%' . $request->input('title') . '%');
        if ($request->has('description'))
            $projects = $projects->where('description', 'like', '%' . $request->input('description') . '%');
        if ($request->has('service_type_id')){
            $projects= $projects->where('name', 'like', '%' . $request->input('service_type_id') . '%');
        }

        $projects = $projects->whereRaw("(project_locale like ? and service_type_locale like ? )",["%$locale%","%$locale%"])
            ->paginate(5);

        return view('projects.index', compact('projects', 'locale'));

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
        $request->validate($this->rules(), $this->messages());
        $project_data = [];
        $project_data['en'] = [
            'title' => $request->en_title,
            'description' => $request->en_description,
            'project_locale'=> 'en',
        ];
        $project_data['ar'] = [
            'title' => $request->ar_title,
            'description' => $request->ar_description,
            'project_locale'=> 'ar',
        ];

        $project= Project::create($project_data);
        $project->image= parent::uploadImage($request->file('project_image'));
        $project->service_type_id= $request->project_service_type;



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

    private function rules($id = null)
    {
        $rules = [
            'en_title' => 'required|max:100',
            'ar_title' => 'required|max:100',
            'en_description' => 'required',
            'ar_description' => 'required',
            'article_image' => 'image',
        ];
        if (!$id) {
            $rules['project_image'] = 'required|image';
        }
        return $rules;
    }

    /**
     *
     * validation's messages
     *
     * @return array
     */
    private function messages()
    {
        return [
            'en_title.required' => trans('project.validations.title_required'),
            'en_title.max' => trans('project.validations.title_max'),
            'en_description.required' => trans('project.validations.description_required'),
            'ar_title.required' => trans('project.validations.title_required'),
            'ar_title.max' => trans('project.validations.title_max'),
            'ar_description.required' => trans('project.validations.description_required'),
        ];
    }
}
