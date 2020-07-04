<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasRoles;
    use AuthenticableTrait;
    protected $guard = 'admin';
    protected  $fillable = ['name', 'email', 'password', 'image', 'role_id'];


    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
