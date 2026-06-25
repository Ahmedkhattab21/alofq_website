<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'portfolio_category_id',
        'title',
        'description',
        'image',
        'technologies',
        'is_featured',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }
}
