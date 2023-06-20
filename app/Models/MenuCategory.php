<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'is_active',
    ];

    public function scopeActive()
    {
        return $this->where('is_active', 1);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
