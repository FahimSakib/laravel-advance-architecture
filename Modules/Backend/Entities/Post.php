<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];
    
    protected static function newFactory()
    {
        return \Modules\Backend\Database\factories\PostFactory::new();
    }
}
