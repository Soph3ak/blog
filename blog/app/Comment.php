<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

//      =======belongsTo(Post), belongsTo(User)=======
    public function posts(){
        return $this->belongsTo(Post::class,'posts_id');
    }

    public function users(){
        return $this->belongsTo(User::class,'commented_by');
    }
}
