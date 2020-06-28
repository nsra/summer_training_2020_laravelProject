<?php

namespace App;
use App\Article;
use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    protected $table = 'article_translations';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
