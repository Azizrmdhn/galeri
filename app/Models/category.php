<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryName'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (!$category->categoryName) {
                $category->categoryName = 'lautan'; 
            }
            if (!$category->categoryName) {
                $category->categoryName = 'Alam'; 
            }
        });
    }
}

