<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    protected $table = 'project_translations';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}
