<?php

namespace App\Http\Controllers;
use App\Company_feature;
    use App\Company_featureTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Company_featuresController extends Controller
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
        $items = Company_featureTranslation::query();
        if ($request->has('title')){
            $company_features = $items->where('title', 'like', '%' . $request->input('title') . '%');
        }

        if ($request->has('description')){
            $company_features = $items->where('description', 'like', '%' . $request->input('description') . '%');
        }

        $items = $items->where('locale', app()->getLocale())->paginate(5);
        return view('company_features.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company_features.create');

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
        $company_feature_data = [];
        $company_feature_data['en'] = [
            'title' => $request->en_title,
            'description' => $request->en_description,
        ];
        $company_feature_data['ar'] = [
            'title' => $request->ar_title,
            'description' => $request->ar_description,
        ];

        $company_feature= Company_feature::create($company_feature_data);
        $company_feature->image= parent::uploadImage($request->file('company_feature_image'));

        if ($company_feature->save()){
            return redirect()->back()->with('success', trans('company_feature.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('company_feature.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('company_features.show', [
            'company_feature' => Company_feature::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company_feature $company_feature)
    {
        return view('company_features.edit', compact('company_feature'));
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
            $company_feature = Company_feature::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $company_feature_data = [];
            $company_feature_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
            ];
            $company_feature_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
            ];
            if($request->file('company_feature_image')){
                $company_feature->image= parent::uploadImage($request->file('company_feature_image'));
            }
            $company_feature->update($company_feature_data);
            return redirect()->back()->with('success', trans('company_feature.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('company_feature.error.updated'));
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
            $company_feature = Company_feature::findOrFail($id);
            $company_feature->delete();

            return response()->json(['status' => 200, 'message' => trans('company_feature.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('company_feature.error.deleted')]);
        }
    }

    private function rules($id = null)
    {
        $rules = [
            'en_title' => 'required|max:100',
            'ar_title' => 'required|max:100',
            'en_description' => 'required',
            'ar_description' => 'required',
            'company_feature_image' => 'image',
        ];
        if (!$id) {
            $rules['company_feature_image'] = 'image';
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
            'en_title.required' => trans('company_feature.validations.title_required'),
            'en_title.max' => trans('company_feature.validations.title_max'),
            'en_description.required' => trans('company_feature.validations.description_required'),
            'ar_title.required' => trans('company_feature.validations.title_required'),
            'ar_title.max' => trans('company_feature.validations.title_max'),
            'ar_description.required' => trans('company_feature.validations.description_required'),
        ];
    }
}
