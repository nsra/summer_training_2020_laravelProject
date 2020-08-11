<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Admin;
class Article extends Model implements TranslatableContract
{
//    use SoftDeletes;
    use Translatable;
    protected  $table = 'articles';
    protected $hidden = ['translations', 'image'];
    protected $appends = ['image_link'];


    public $translatedAttributes = ['title', 'description'];
    protected  $fillable = ['user_id', 'image'];


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }


    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }

    public function getImageLinkAttribute(){
            if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
