<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "news_name",
        "news_img",
        "news_desc1",
        'news_desc2',
        'news_date',
    ];
}