<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Table;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'image',
        'title',
        'content',
        'aksi',
    ];
    
    
    // /**
    //  * fillable
    //  *
    //  * @var array
    //  */
}