<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_stepTranslation extends Model
{
    protected $table = 'order_step_translations';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}
