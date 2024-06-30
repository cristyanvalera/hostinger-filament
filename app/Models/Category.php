<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany, HasMany};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id', 'name', 'slug', 'is_visible', 'description',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, foreignKey: 'parent_id');
    }

    public function child(): HasMany
    {
        return $this->hasMany(Category::class, foreignKey: 'parent_id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
