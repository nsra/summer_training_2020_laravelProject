<?php

namespace App\Http\Controllers;
use App\Client_review;
use App\Client_reviewTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Client_reviewsController extends Controller
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

    public function index(Request $request )
    {
        $client_reviews = Client_review::join('client_review_translations', 'client_reviews.id', '=', 'client_review_translations.client_review_id')
            ->select('client_reviews.id', 'client_review_translations.*')
            ->where([]);

        if ($request->has('name')){
            $client_reviews = $client_reviews->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('review')){
            $client_reviews = $client_reviews->where('review', 'like', '%' . $request->input('review') . '%');
        }

        $client_reviews = $client_reviews->where('locale', app()->getLocale())->paginate(5);
        return view('client_reviews.index', compact('client_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client_reviews.create');

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
        $client_review_data = [];
        $client_review_data['en'] = [
            'name' => $request->en_name,
            'review' => $request->en_review,
        ];
        $client_review_data['ar'] = [
            'name' => $request->ar_name,
            'review' => $request->ar_review,
        ];

        $client_review= Client_review::create($client_review_data);

        $client_review->image= parent::uploadImage($request->file('client_review_image'));
        $client_review->name= $request->name;

        if ($client_review->save()){
            return redirect()->back()->with('success', trans('client_review.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('client_review.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('client_reviews.show', [
            'client_review' => Client_review::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client_review $client_review)
    {
        return view('client_reviews.edit', compact('client_review'));
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
            $client_review = Client_review::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $client_review_data = [];
            $client_review_data['en'] = [
                'name' => $request->en_name,
                'review' => $request->en_review,
            ];
            $client_review_data['ar'] = [
                'name' => $request->ar_name,
                'review' => $request->ar_review,
            ];
            if($request->file('client_review_image')){
                $client_review->image= parent::uploadImage($request->file('client_review_image'));
            }
            $client_review->update($client_review_data);
            return redirect()->back()->with('success', trans('client_review.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('client_review.error.updated'));
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
            $client_review = Client_review::findOrFail($id);
            $client_review->delete();

            return response()->json(['status' => 200, 'message' => trans('client_review.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('client_review.error.deleted')]);
        }
    }


    private function rules($id = null)
    {
        $rules = [
            'en_name' => 'required|max:50',
            'ar_name' => 'required|max:50',
            'en_review' => 'required',
            'ar_review' => 'required',
            'client_review_image' => 'image',
        ];
        if (!$id) {
            $rules['client_review_image'] = 'required|image';
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
            'en_name.required' => trans('client_review.validations.name_required'),
            'en_name.max' => trans('client_review.validations.name_max'),
            'ar_name.required' => trans('client_review.validations.name_required'),
            'ar_name.max' => trans('client_review.validations.name_max'),
            'en_review.required' => trans('client_review.validations.rview_required'),
            'ar_review.required' => trans('client_review.validations.rview_required'),
            'client_review_image.required' => trans('client_review.validations.image_required'),
        ];
    }
}
