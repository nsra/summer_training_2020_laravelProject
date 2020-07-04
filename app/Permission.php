<?php
//
//namespace App;
//
//use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
//use Illuminate\Database\Eloquent\Model;
//use Astrotomic\Translatable\Translatable;
//use App\Permission;
//class Permission extends Model implements TranslatableContract
//{
//    use Translatable;
//    protected  $table = 'permissions';
//
//    public $translatedAttributes = ['name'];
//    protected  $fillable = ['guard_name'];
//    public function roles() {
//        return $this->belongsToMany(Role::class);
//    }
//}
