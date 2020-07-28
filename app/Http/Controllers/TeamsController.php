<?php

namespace App\Http\Controllers;
use App\TeamTranslation;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $teams = TeamTranslation::where([]);

        if ($request->has('name')){
            $teams = $teams->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->has('bio')){
            $teams = $teams->where('bio', 'like', '%' . $request->input('bio') . '%');
        }
        $teams = $teams->where('locale', '=', app()->getLocale())->paginate(5);
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');

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
        $request->validate($this->rules(), $this->messages());
        $team_data = [];
        $team_data['en'] = [
            'name' => $request->en_name,
            'bio' => $request->en_bio,
        ];
        $team_data['ar'] = [
            'name' => $request->ar_name,
            'bio' => $request->ar_bio,
        ];

        $team= Team::create($team_data);
        $team->image= parent::uploadImage($request->file('team_image'));

        if ($team->save()){
            return redirect()->back()->with('success', trans('team.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('team.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('teams.show', [
            'team' => Team::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
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
        try{
            $team = Team::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $team_data = [];
            $team_data['en'] = [
                'name' => $request->en_name,
                'bio' => $request->en_bio,
            ];
            $team_data['ar'] = [
                'name' => $request->ar_name,
                'bio' => $request->ar_bio,
            ];
            if($request->file('team_image')){
                $team->image= parent::uploadImage($request->file('team_image'));
            }
            $team->update($team_data);
            return redirect()->back()->with('success', trans('team.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('team.error.updated'));
        }
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
            $team = Team::findOrFail($id);
            $team->delete();

            return response()->json(['status' => 200, 'message' => trans('team.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('team.error.deleted')]);
        }
    }

    private function rules($id = null)
    {
        $rules = [
            'en_name' => 'required|max:100',
            'ar_name' => 'required|max:100',

            'team_image' => 'image',
        ];
        if (!$id) {
            $rules['team_image'] = 'required|image';
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
            'en_name.required' => trans('team.validations.name_required'),
            'ar_name.required' => trans('team.validations.name_required'),
            'en_name.max' => trans('team.validations.name_max'),
            'ar_name.max' => trans('team.validations.name_max'),
            'ar_bio.required' => trans('team.validations.bio_required'),
            'team_image.required' => trans('team.validations.image_required'),

        ];
    }
}
