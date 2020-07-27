<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyTranslation extends Model
{
    protected $table = 'company_translations';
    protected $fillable = ['name', 'description', 'address', 'footer'];
    public $timestamps = false;
}
