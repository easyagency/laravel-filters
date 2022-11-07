<?php

namespace Easyagency\LaravelFilters\Traits;

use Easyagency\LaravelFilters\Filters;
use Illuminate\Database\Eloquent\Builder;

trait HasFilters
{
    /**
     * @param $query
     * @param $filters
     * @return mixed
     */
    public function scopeFilter(Builder $query, Filters $filters)
    {
        return $filters->apply($query);
    }
}