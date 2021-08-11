<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'category';

    protected $fillable = [
        'name',
    ];

    public function category()
    {
        return $this->hasMany(Item::class, 'item');
    }



}
