<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Method: Ambil produk berdasarkan kategori
    public static function getByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->get();
    }
}
