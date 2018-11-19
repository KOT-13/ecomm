<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait IsOrderable
 * @package App\Models\Traits
 */
trait IsOrderable
{
    /**
     * @param Builder $builder
     * @param string $direction
     */
    public function scopeOrdered(Builder $builder, $direction = 'asc'): void
    {
        $builder->orderBy('order', $direction);
    }
}