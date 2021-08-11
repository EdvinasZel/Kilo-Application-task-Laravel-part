<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'item';

    public function categoryRelationship()
    {
        return $this->belongsTo(Category::class,'category');
    }

    public function scopeOfCategory($query, $categories)
    {
        return $query->whereIn('category', $categories);
    }

}
