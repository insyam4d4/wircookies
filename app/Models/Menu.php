<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'menu_category_id',
        'code',
        'name',
        'description',
        'price',
        'image_url',
        'is_favorite',
        'is_active',
    ];

    public function scopeActive()
    {
        return $this->where('is_active', 1);
    }

    public function menuCategory()
    {
        return $this->belongsTo(MenuCategory::class);
    }
}
