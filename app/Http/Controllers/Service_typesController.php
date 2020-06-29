<?php

namespace App\Http\Controllers;

use App\Service_type;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Service_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $service_types = Service_type::where([]);
        if ($request->has('title'))
            $service_types = $service_types->where('title', 'like', '%' . $request->input('title') . '%');
        if ($request->has('description'))
            $service_types = $service_types->where('description', 'like', '%' . $request->input('description') . '%');

        $service_types = $service_types->paginate(5);
        return view('service_types.index', compact('service_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service_types.create');
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
        $service_type_data = [];
        $service_type_data['en'] = [
            'title' => $request->en_title,
            'description' => $request->en_description,
        ];
        $service_type_data['ar'] = [
            'title' => $request->ar_title,
            'description' => $request->ar_description,
        ];

        $service_type= Service_type::create($service_type_data);
        $service_type->image= parent::uploadImage($request->file('service_type_image'));

        if ($service_type->save()){
            return redirect()->back()->with('success', trans('service_type.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('service_type.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('service_types.show', [
            'service_type' => Service_type::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service_type $service_type)
    {
        return view('service_types.edit', compact('service_type'));
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
            $service_type = Service_type::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $service_type_data = [];
            $service_type_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
            ];
            $service_type_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
            ];
            if($request->file('service_type_image')){
                $service_type->image= parent::uploadImage($request->file('service_type_image'));
            }
            $service_type->update($service_type_data);
            return redirect()->back()->with('success', trans('service_type.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('service_type.error.updated'));
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
            $service_type = Service_type::findOrFail($id);
            $service_type->delete();

            return response()->json(['status' => 200, 'message' => trans('service_type.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('service_type.error.deleted')]);
        }

    }

    private function rules($id = null)
    {
        $rules = [
            'en_title' => 'required|max:100',
            'ar_title' => 'required|max:100',
            'en_description' => 'required',
            'ar_description' => 'required',
            'service_type_image' => 'image',
        ];
        if (!$id) {
            $rules['service_type_image'] = 'required|image';
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
            'en_title.required' => trans('service_type.validations.title_required'),
            'en_title.max' => trans('service_type.validations.title_max'),
            'en_description.required' => trans('service_type.validations.description_required'),
            'ar_title.required' => trans('service_type.validations.title_required'),
            'ar_title.max' => trans('service_type.validations.title_max'),
            'ar_description.required' => trans('service_type.validations.description_required'),
        ];
    }
}
