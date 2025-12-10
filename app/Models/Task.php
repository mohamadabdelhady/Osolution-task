<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'priority',
        'category_id',
        'due_date',
        'completed',
        'image_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
