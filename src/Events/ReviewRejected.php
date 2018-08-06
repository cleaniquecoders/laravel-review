<?php

namespace CleaniqueCoders\LaravelReview\Events;

use CleaniqueCoders\LaravelReview\Models\Review;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReviewRejected
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Review.
     *
     * @var CleaniqueCoders\LaravelReview\Models\Review
     */
    public $review;

    /**
     * Create a new event instance.
     */
    public function __construct(Review $review)
    {
        $this->review = $review;
    }
}
