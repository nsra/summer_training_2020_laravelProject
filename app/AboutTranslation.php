<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    protected $table = 'about_translations';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}
