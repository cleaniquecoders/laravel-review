<?php

namespace CleaniqueCoders\LaravelReview;

/*
 * This file is part of laravel-review
 *
 * @license MIT
 * @package laravel-review
 */

use Illuminate\Support\Facades\Facade;

class LaravelReviewFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelReview';
    }
}
