<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Client_review extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'client_reviews';

    public $translatedAttributes = ['review'];
    protected  $fillable = ['name', 'image'];

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
