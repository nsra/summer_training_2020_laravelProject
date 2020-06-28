<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
USE App\Service_type;

class Project extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'projects';
    public $translatedAttributes = ['title', 'description'];
    protected  $fillable = ['service_type_id', 'image'];

    public function service_type()
    {
        return $this->belongsTo(Service_type::class, 'service_type_id', 'id');
    }

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
