<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Team extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'teams';
    public $translatedAttributes = ['name', 'pio'];
    protected  $fillable = ['image'];



    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
