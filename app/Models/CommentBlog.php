<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentBlog extends Model
{
    use HasFactory;

    protected $table = 'table_comment';
    protected $guarded =[];

    public function blogs(){
        return $this->belongsTo(Post::class , 'blog_id');
    }
    public function user(){
        return $this->belongsTo(Post::class , 'user_id');
    }

}
