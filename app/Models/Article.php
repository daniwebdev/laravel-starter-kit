<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $casts = [
        'like' => 'array',
        'share' => 'array',
        'published_at' => 'date',
    ];

    function category() {
        return $this->belongsTo(ArticleCategory::class);
    }

    function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    function getAuthorNameAttribute() {
        return $this->author?->name ?? 'Anonymouse';
    }
}
