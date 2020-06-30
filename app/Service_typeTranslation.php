<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_typeTranslation extends Model
{
    protected $table = 'service_type_translations';
    protected $fillable = ['name', 'about_service', 'service_type_locale'];
    public $timestamps = false;
}
