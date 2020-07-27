<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order_stepsController extends Controller
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
        $items = Order_stepsTranslation::query();
        if ($request->has('title')){
            $order_steps = $items->where('title', 'like', '%' . $request->input('title') . '%');
        }

        if ($request->has('description')){
            $order_steps = $items->where('description', 'like', '%' . $request->input('description') . '%');
        }

        $items = $items->where('locale', Session::get('locale'))->paginate(5);
        return view('order_steps.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order_steps.create');

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
        $order_step_data = [];
        $order_step_data['en'] = [
            'title' => $request->en_title,
            'description' => $request->en_description,
        ];
        $order_step_data['ar'] = [
            'title' => $request->ar_title,
            'description' => $request->ar_description,
        ];

        $order_step= order_steps::create($order_step);
        $order_step->image= parent::uploadImage($request->file('order_step_image'));

        if ($order_step->save()){
            return redirect()->back()->with('success', trans('order_step.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('order_step.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('order_steps.show', [
            'order_step' => Order_step::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_step $order_step)
    {
        return view('order_steps.edit', compact('order_step'));
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
            $order_step = Order_step::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $order_step_data = [];
            $order_step_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
            ];
            $order_step_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
            ];
            if($request->file('order_step_image')){
                $order_step->image= parent::uploadImage($request->file('order_step_image'));
            }
            $order_step->update($order_step_data);
            return redirect()->back()->with('success', trans('order_step.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('order_step.error.updated'));
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
            $order_step = Order_step::findOrFail($id);
            $order_step->delete();

            return response()->json(['status' => 200, 'message' => trans('Order_step.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('Order_step.error.deleted')]);
        }
    }

    private function rules($id = null)
    {
        $rules = [
            'en_title' => 'required|max:100',
            'ar_title' => 'required|max:100',
            'en_description' => 'required',
            'ar_description' => 'required',
            'order_step_image' => 'image',
        ];
        if (!$id) {
            $rules['order_step_image'] = 'required|image';
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
            'en_title.required' => trans('order_step.validations.title_required'),
            'en_title.max' => trans('order_step.validations.title_max'),
            'en_description.required' => trans('order_step.validations.description_required'),
            'ar_title.required' => trans('order_step.validations.title_required'),
            'ar_title.max' => trans('order_step.validations.title_max'),
            'ar_description.required' => trans('order_step.validations.description_required'),
        ];
    }
}
