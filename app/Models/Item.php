<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'item';

    protected $fillable = [
        'category',
        'name',
        'value',
        'quality',
    ];

    public function categoryRelationship()
    {
        return $this->belongsTo(Category::class,'category');
    }

    public function scopeOfCategory($query, $categories)
    {
        return $query->whereIn('category', $categories);
    }

}
