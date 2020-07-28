<?php

namespace App\Http\Controllers;
use App\Article;
Use App\Admin;
use App\ArticleTranslation;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticlesController extends Controller
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

        $items = Article::join('article_translations', 'articles.id', '=', 'article_translations.article_id')
            ->join('admins', 'articles.admin_id', '=', 'admins.id')
            ->select('articles.id', 'article_translations.*', 'admins.name')
            ->where([]);

        if ($request->has('title'))
            $items = $articles->where('title', 'like', '%' . $request->input('title') . '%');

        if ($request->has('description'))
            $items = $items->where('description', 'like', '%' . $request->input('description') . '%');

        if ($request->has('admin_id')){
            $items= $items->where('name', 'like', '%' . $request->input('admin_id') . '%');
        }
        $articles = $items->where('locale', app()->getLocale())->paginate(5);
        // dd($items->first());

        return view('articles.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            $article_data = [];
            $article_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
            ];
            $article_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
            ];

        $article= Article::create($article_data);
        $article->image= parent::uploadImage($request->file('article_image'));
        $article->admin_id= auth()->user()->id;

        if ($article->save()){
            return redirect()->back()->with('success', trans('article.success.stored'));
        }
        else
            return redirect()->back()->with('error', trans('article.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articles.show', [
            'article' => Article::find($id),
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
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
            $article = Article::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());

            $article_data = [];
            $article_data['en'] = [
                'title' => $request->en_title,
                'description' => $request->en_description,
            ];
            $article_data['ar'] = [
                'title' => $request->ar_title,
                'description' => $request->ar_description,
            ];
            if($request->file('article_image')){
                $article->image= parent::uploadImage($request->file('article_image'));
            }
            $article->update($article_data);
            return redirect()->back()->with('success', trans('article.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('article.error.updated'));
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
            $article = Article::findOrFail($id);
            $article->delete();

            return response()->json(['status' => 200, 'message' => trans('article.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('article.error.deleted')]);
        }

    }

    private function rules($id = null)
    {
        //the best rules structure
        $rules = [
            'en_title' => 'required|max:100',
            'ar_title' => 'required|max:100',
            'en_description' => 'required',
            'ar_description' => 'required',
            'article_image' => 'image',
        ];
        if (!$id) {
            $rules['article_image'] = 'required|image';
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
            'en_title.required' => trans('article.validations.title_required'),
            'en_title.max' => trans('article.validations.title_max'),
            'en_description.required' => trans('article.validations.description_required'),
            'ar_title.required' => trans('article.validations.title_required'),
            'ar_title.max' => trans('article.validations.title_max'),
            'ar_description.required' => trans('article.validations.description_required'),
        ];
    }
}
