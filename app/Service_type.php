<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_type extends Model
{
    protected $table = 'service_types';
    protected $guarded = [];

    public function services()
    {
        return $this->hasMany(App\Service::class);
    }

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }

}
