<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //    =======hasMany(Post) , belongsToMany(Role) , hasMany(Comment)=======
    public function posts()
    {
        return $this->hasMany('App\Post','posted_by');
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'users_roles','users_id','roles_id')
            ->with(Users_Roles::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'commented_by');
    }
}
