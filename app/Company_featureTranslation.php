<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_featureTranslation extends Model
{
    protected $table = 'company_features_translations';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}
