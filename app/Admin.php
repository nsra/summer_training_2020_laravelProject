<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasPermissions;
class Admin extends Authenticatable
{
    use Notifiable;

    use HasRoles, HasPermissions;
    protected $guard = 'admin';

    protected  $fillable = ['name', 'email', 'password', 'image', 'role_id'];

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }
}
