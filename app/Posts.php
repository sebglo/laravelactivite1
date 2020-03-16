<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    
    
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [
        'user_id', 
        'post_content', 
        'post_title',
        'post_status',
        'post_name',
        'post_type',
        'post_category',
        'post_date',
    ];
}
