<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\User;
class Article extends Model implements TranslatableContract
{
//    use SoftDeletes;
    use Translatable;
    protected  $table = 'articles';

    public $translatedAttributes = ['title', 'description'];
    protected  $fillable = ['user_id', 'image'];
//    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function article_translations()
//    {
//        return $this->hasMany(App\ArticleTranslation::class);
//    }

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
