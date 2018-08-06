<?php

namespace CleaniqueCoders\LaravelReview\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
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
        'created' => \CleaniqueCoders\LaravelReview\Events\ReviewCreated::class,
    ];

    /**
     * Review requestor.
     */
    public function requestor()
    {
        return $this->belongsTo(config('reviewer.models.user'));
    }

    /**
     * Review reviews.
     */
    public function reviewers()
    {
        return $this->hasMany(Reviewer::class);
    }
}
