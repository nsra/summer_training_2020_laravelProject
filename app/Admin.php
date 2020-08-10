<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasPermissions;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;

    use HasRoles, HasPermissions;
    protected $guard = 'admin';

    protected  $fillable = ['name', 'email', 'password', 'image'];

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
