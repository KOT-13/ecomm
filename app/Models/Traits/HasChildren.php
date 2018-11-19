<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait HasChildren
 * @package App\Models\Traits
 */
trait HasChildren
{
    /**
     * @param Builder $builder
     */
    public function scopeParents(Builder $builder): void
    {
        $builder->whereNull('parent_id');
    }
}