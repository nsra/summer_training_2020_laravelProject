<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $guarded = [];

    public function service_type()
    {
        return $this->belongsTo(App\Service_type::class, 'service_type_id', 'id');
    }
}
