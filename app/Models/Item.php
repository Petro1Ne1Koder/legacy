<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        "item_name",
        'item_decs',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}