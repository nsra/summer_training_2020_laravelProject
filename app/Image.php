<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function getImage()
    {
        if (!$this->name)
            return asset('no_image.png');
        return asset($this->name);
    }
}
