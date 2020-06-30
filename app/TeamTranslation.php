<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    protected $table = 'team_translations';
    protected $fillable = ['name', 'bio'];
    public $timestamps = false;
}
