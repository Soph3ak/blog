<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category','posts_categories','posts_id','categories_id')
            ->using('App\Posts_Categories');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'posts_id');
    }
}
