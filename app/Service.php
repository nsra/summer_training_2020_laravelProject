<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = [];

    public function service_type()
    {
        return $this->belongsTo(App\Service_type::class);
    }
}
