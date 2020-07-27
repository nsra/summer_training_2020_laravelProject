<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model implements TranslatableContract
{
    use Translatable;

    protected  $table = 'ads';

    public $translatedAttributes = ['title', 'description', 'button'];
    protected  $fillable = [ 'link', 'number', 'image'];

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
