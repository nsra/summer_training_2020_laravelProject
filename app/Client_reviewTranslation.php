<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_reviewTranslation extends Model
{
    protected $table = 'client_review_translations';
    protected $fillable = ['name', 'review'];
    public $timestamps = false;
}
