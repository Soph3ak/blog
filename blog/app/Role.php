<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

//      =======belongsToMany(User)=======
    public function users(){
        return $this->belongsToMany(User::class,'users_roles','roles_id','users_id')
            ->with(Users_Roles::class);
    }
}
