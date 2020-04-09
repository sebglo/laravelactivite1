<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
protected $fillable = [
'post_name', 'post_content','post_title'
];
//protected $table = "posts";

/**
* Get the user that authored the post.
*/
public function author()
{
return $this->belongsTo('App\User','user_id');
}
}
