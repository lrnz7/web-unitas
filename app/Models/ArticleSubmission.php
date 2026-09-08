<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'author_name',
        'author_npm',
        'photo_primary',
        'photo_secondary',
        'photo_extra',
        'status',
    ];
}