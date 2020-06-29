<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_reviewTranslation extends Model
{
    protected $table = 'article_translations';
    protected $fillable = ['review'];
    public $timestamps = false;
}
