<?php

namespace App\Http\Controllers;
use App\Article;
Use App\User;
use App\ArticleTranslation;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articles = Article::join('article_translations', 'articles.id', '=', 'article_translations.article_id')
            ->join('users', 'articles.user_id', '=', 'users.id')
            ->select('articles.id', 'article_translations.*', 'users.name')
            ->where([]);
        if ($request->has('title'))
            $articles = $articles->where('title', 'like', '%' . $request->input('title') . '%');
        if ($request->has('description'))
            $articles = $articles->where('description', 'like', '%' . $request->input('description') . '%');
        if ($request->has('user_id')){
            $articles= $articles->where('name', 'like', '%' . $request->input('user_id') . '%');
        }
        $articles = $articles->where('locale', '=', Session::get('locale'))->paginate(5);
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
        $article->user_id= auth()->user()->id;

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
//        dd($article);
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
