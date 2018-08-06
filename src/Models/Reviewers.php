<?php

namespace CleaniqueCoders\LaravelReview\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviewers extends Model
{
    use SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
    ];

    /**
     * Reviewer review.
     */
    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    /**
     * Review review.
     */
    public function reviewer()
    {
        return $this->belongsTo(config('review.models.reviewed_by'), 'reviewed_by');
    }
}
