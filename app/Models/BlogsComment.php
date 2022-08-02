<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'blog_id',
        'email',
        'comment'
    ];
}
