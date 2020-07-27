<?php

namespace App\Http\Controllers;
use App\Ad;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class AdsController extends Controller
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

    public function index()
    {
        $ads=Ad::paginate(7);
        return view('ad.index', compact('ads'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.create');

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
// dd($request->all());
            $ad_data = [];
            $ad_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
                'button' => $request->en_button,
            ];
            $ad_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
                'button' => $request->ar_button,
            ];
    
            $ad= Ad::create($ad_data);
            $ad->image= parent::uploadImage($request->file('ad_image'));
            $ad->number= $request->number;
            $ad->link= $request->link;
    
            if ($ad->save()){
                return redirect()->back()->with('success', trans('ad.success.stored'));
            }
            else
                return redirect()->back()->with('error', trans('ad.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ad.show', [
            'ad' => Ad::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('ad.edit', compact('ad'));

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
            $ad = Ad::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $ad_data = [];
            $ad_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
                'button' => $request->en_button,
            ];
            $ad_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
                'button' => $request->ar_button,

            ];
            if($request->file('ad_image')){
                $ad->image= parent::uploadImage($request->file('ad_image'));
            }
            $ad->number=$request->number;
            $ad->link=$request->link;
            $ad->update($ad_data);
            return redirect()->back()->with('success', trans('ad.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('ad.error.updated'));
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
            $ad = Ad::findOrFail($id);
            $ad->delete();

            return response()->json(['status' => 200, 'message' => trans('ad.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('ad.error.deleted')]);
        }
    }

    private function rules($id = null)
    {
        $rules = [
            'en_title' => 'required|max:100',
            'ar_title' => 'required|max:100',
            'en_description' => 'required',
            'ar_description' => 'required',
            'ad_image' => 'image',
        ];
        if (!$id) {
            $rules['ad_image'] = 'image';
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
            'en_title.required' => trans('ad.validations.title_required'),
            'en_title.max' => trans('ad.validations.title_max'),
            'en_description.required' => trans('ad.validations.description_required'),
            'ar_title.required' => trans('ad.validations.title_required'),
            'ar_title.max' => trans('ad.validations.title_max'),
            'ar_description.required' => trans('ad.validations.description_required'),
        ];
    }
}

