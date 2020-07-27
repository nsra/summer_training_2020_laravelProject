<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdTranslation extends Model
{
    protected $table = 'ad_translations';
    protected $fillable = ['title', 'description', 'button'];
    public $timestamps = false;
}
