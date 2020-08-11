<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
class Service_type extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'service_types';

    public $translatedAttributes = ['name', 'about_service'];
    protected  $fillable = ['image'];


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

    // public function getImageLinkAttribute(){
    //     return $this->image ? url('/') . '/' . $this->image : url('/') . '';
    // }

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }

}
