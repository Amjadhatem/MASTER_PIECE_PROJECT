<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_title',
        'image_path',
        'blog_content',
        'blog_date' ,
        'complete_content'
    ];
}
