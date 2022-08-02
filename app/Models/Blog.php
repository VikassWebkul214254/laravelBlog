<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;


    protected $fillable = [
        'customer_id',
        'blog_title',
        'blog_desc',
        'status'
    ];


    public function blogdetails($blog_id)
    {
        echo $blog_id;
    }
   
}
