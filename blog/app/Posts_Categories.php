<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Posts_Categories extends Pivot
{
    protected $table = 'posts_categories';
}
