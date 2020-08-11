<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
class Company extends Model implements TranslatableContract
{
    use Translatable;
    protected  $table = 'company';

    public $translatedAttributes = ['name', 'description', 'address', 'footer'];
    protected  $fillable = [ 'image', 'email', 'whatsapp'];

    protected $hidden = ['translations', 'image'];
    protected $appends = ['image_link'];

    public function getImageLinkAttribute(){
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
