<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CompanyStat extends Model
{
    protected $fillable = [
        'label',
        'value',
        'suffix',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }
}
